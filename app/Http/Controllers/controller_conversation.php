<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\conversation;

class controller_conversation extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
$data = $request;
$count =  1;  
$new_file = 'Conversation_'.$data -> conversation_id.'.txt';
$messages_length = count($data -> messages);
$conversation = storage_path("app/$new_file");
$file = fopen($conversation, "w");
fwrite($file, 'Datos recibidos de la campaña'.PHP_EOL );
fwrite($file, 'rrhh_id: '.$data -> rrhh_id.PHP_EOL );
fwrite($file, 'campaign_id: '.$data -> campaign_id.PHP_EOL);
fwrite($file, 'conversation_id: '.$data -> conversation_id.PHP_EOL );
fwrite($file, PHP_EOL );
for ($i=0; $i < $messages_length ; $i++) { 
    $messages = (object) $data -> messages[$i];
    fwrite($file,'Mensaje: '.$count. PHP_EOL );
foreach ($messages as $key => $value ) {
fwrite($file, $key.': '. $value. PHP_EOL );
}
fwrite($file, PHP_EOL );
$count = $count +1;
}
fclose($file);
return $data;
$data -> save(); 

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
