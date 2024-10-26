<?php

namespace App\Http\Controllers\contato;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contato;
use App\Models\UserContato;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class contactController extends Controller
{
    public function index(){

        $contacts = Contato::with('UserContato')->paginate(10);
       
        foreach($contacts as $contact ){
            $contact->idade = Carbon::parse($contact->UserContato->data_nascimento)->age;
        }
            

        return view('contato.listContato', ['contacts' => $contacts]);
    }

    public function create() {
        return view('contato.createContato');
    }

    public function store(Request $request){
    
        $user = new UserContato;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->data_nascimento = $request->date;

        $user->save();
       
        $contacts = new Contato;
        $contacts->numero = $request->numero;
        $contacts->telefone = $request->telefone;
        $contacts->endereco = $request->endereco;
        $contacts->complemento = $request->complemento;
        $contacts->cep = $request->cep;
        $contacts->estado = $request->estado;
        $contacts->user_cont_id = $user->id; 

        $contacts->save();

        return redirect('/listContato')->with('msg', 'Contato criado com sucesso!');
    }

    public function destroy($id) {
        DB::beginTransaction();

        try{
            $contato = Contato::findOrFail($id);
            if ($contato->user_cont_id) {
                UserContato::where('id', $contato->user_cont_id)->delete();
            }
            
            $contato->delete();
            

            DB::commit();

            return redirect('/listContato')->with('msg', 'Contato Deletado com sucesso!');
        
        } catch (\Exception $e){
            DB::rollBack();

            return redirect('/listContato')->with('msg', 'Erro ao Excluir Contato!');
        }
    }

    public function edit($id){
        $contato = Contato::with('userContato')->findOrFail($id);
        return view('contato.edit', [ 'listContact' => $contato]);
    }

    public function update(Request $request, $id){
        DB::beginTransaction();

        try {
           $contato = Contato::findOrFail($id);

           
            if ($contato->user_cont_id) {
                $userContato = UserContato::findOrFail($contato->user_cont_id);

                $userContato->name = $request->input('name');
                $userContato->email = $request->input('email');
                $userContato->data_nascimento = \Carbon\Carbon::createFromFormat('d-m-Y', $request->input('date'))->format('Y-m-d');
                $userContato->save(); 
            }

            
            $contato->telefone = $request->input('telefone');
            $contato->numero = $request->input('numero');
            $contato->endereco = $request->input('endereco');
            $contato->complemento = $request->input('complemento');
            $contato->cep = $request->input('cep');
            $contato->estado = $request->input('estado');
            $contato->save();

            DB::commit();

            return redirect('/listContato')->with('msg', 'Contato atualizado com sucesso!');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect('/listContato')->with('msg', 'Erro ao atualizar contato! ' . $e->getMessage());
        }
    }

    public function search(Request $request){

        $search = $request->input('search');
        
        $contatos = Contato::with('userContato')->whereHas('userContato', function ($query) use ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        })->paginate(10);
    
        return view('contato.listContato', ['contacts' => $contatos]);
    }

    public function show($id) {
        // Busca o contato e suas informações
        $contatoModal = Contato::with('userContato')->findOrFail($id);
        $contacts = Contato::with('userContato')->get();
    
        return view('contato.listContato', ['contacts' => $contacts, 'contatoModal' => $contatoModal]);
    }
    
}
