<?php
/*
namespace App\Http\Handle\ContactHandler;

use \App\Http\Handle\Interfaces\SaveInterface;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class SaveContact implements SaveInterface{

    private $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function save()
    {
        try{
            DB::beginTransaction();
            $id = $this->request->id ?? null;
            $contact = Contact::findOrNew($id);
            $contact->name = $this->request->name;
            $contact->email = $this->request->email;
            $contact->subject = $this->request->subject;
            $contact->message = $this->request->message;
            $contact->save();
            DB::commit();
            return true;
        }catch (Exception $exception){
            DB::rollBack();
            return false;
        }
    }
}*/