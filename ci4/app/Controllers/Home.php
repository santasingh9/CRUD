<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function insert(){
        $data = [
            'user_name'=>$this->request->getVar('user_name'),
            'user_email'=>$this->request->getVar('user_email'),
            'user_password'=>$this->request->getVar('user_password'),
        ];
    
    $model=new UserModel();

    $model->insert($data);
    echo "<h1>Data Sent Successfully...</h1>";
    }

    public function show(){
        $model = new UserModel();

        $data['users'] = $model->findAll();

        return view('Show', $data);
    }

    public function delete($id=null){
        $model = new UserModel();

        $data['users'] = $model->where('user_id', $id)->delete();

        return redirect()->to(base_url('Home/show'));    
    }
    public function edit($id=null){
        $model = new UserModel();
        $data['users'] = $model->where('user_id', $id)->first();
        
        return view('edit', $data);
    }

    //UPDATED data store  in array
    public function update(){
        $data = [
            'user_name'=>$this->request->getVar('user_name'),
            'user_email'=>$this->request->getVar('user_email'),
            'user_password'=>$this->request->getVar('user_password'),
        ];
        // getVar to get value of fields
        $id = $this->request->getVar('user_id');
        $model = new UserModel();
       // on base of id we will update record
       //data = to be updated
        $model->update($id, $data);
        return redirect()->to(site_url('Home/show'));

        //redirect to given location and show() called to get data

        
    }

}
