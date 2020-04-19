<?php
namespace App\Http\Repositories;

use App\Models\Contact;

class ContactRepository
{
    public function getFormData(Contact $contact)
	{
		return [
			'contact'		=> $contact,
		];
	}

    public function find($id)
    {
        return Contact::find($id);
    }

    public function findAll()
    {
        return Contact::latest('id')->get();
    }


}
