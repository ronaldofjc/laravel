<?php namespace estoque\Http\Controllers;

use estoque\Produto;
use Request;
use estoque\Http\Requests\ProdutosRequest;

class ProdutoController extends Controller{
	
	public function lista(){
		$produtos = Produto::all();
		return view('produto.listagem')->with('produtos', $produtos);
	}

	public function mostra($id){
		$produto = Produto::find($id);
		if(empty($produto)){
			return "Esse produto não existe";
		}
		return view('produto.detalhes')->with('p', $produto);
	}

	public function novo(){
		return view('produto.formulario');
	}

	public function adiciona(ProdutosRequest $request){
		Produto::create($request::all());
		return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
	}

	public function remove($id){
		$produto = Produto::find($id);
		$produto->delete();
		return redirect()->action('ProdutoController@lista');
	}

	public function edita($id){
		$produto = Produto::find($id);
		if(empty($produto)){
			return "Esse produto não existe";
		}
		return view('produto.alterar')->with('p', $produto);
	}

	public function alterar(ProdutosRequest $request, $id){
		$produto = Produto::find($id);
		$params = $request->all();
		$produto->fill($params)->save();
		return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
	}

	public function listaJson(){
		$produtos = Produto::all();
		return response()->json($produtos);
	}
}

?>