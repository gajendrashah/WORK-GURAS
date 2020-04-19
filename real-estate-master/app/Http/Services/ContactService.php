<?php
namespace App\Http\Services;

use App\Models\Contact;

class ContactService
{
    public function create($data)
    {
        return Contact::create($data);
    }

    public function update($id, $data)
    {
        $contact = Contact::find($id);

        return $contact->update($data);
    }

    public function delete($id)
    {
        $contact = Contact::find($id);

        return $contact->update($data);
    }

}
