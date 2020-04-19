<?php
    function showMessage($message, $status = null)
    {

        if ($status == 'info') {
            $class = "bg-info";
        } else if ($status == "danger") {
            $class = "bg-danger";
        } else {
            $class = 'bg-success';
        }

        session()->flash('flash_message', $message);
        session()->flash('flash_class', $class);
    }

    function isFileExist($request, $model, $requestFileName, $destinationPath)
    {
        if ($request->hasFile($requestFileName) && $request->file($requestFileName)->isValid()) {

            $fileName = $model->id;

            if ($file = uploadImage($request->file($requestFileName), $fileName, $destinationPath)) {
                return $file->getFileName();
            }
        }
        return false;
    }

    function uploadImage(Illuminate\Http\UploadedFile $file, $fileName, $destinationPath)
    {
        $filename = $fileName . '.' . $file->getClientOriginalExtension();

        return $file->move($destinationPath, $filename);
    }
