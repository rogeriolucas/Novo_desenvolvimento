<?php

namespace App\Http\Controllers\API;

use Response ;
use App\Models\Consulta;
use App\Models\Documento;
use Illuminate\Http\Request;
use App\Exports\DocumentosExport;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Facades\App;
// use Illuminate/Pagination\Paginatior;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Facades\Excel;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use IlluminateDatabase\Eloquent\Collection;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Eloquent\Collection;





class DocumentosController extends Controller
{

     public function enviarDocumentosFormulario(Rquest $request)

     {
         
      public function $tipo_documento= false ;
      this->template->set_template()




      function __construct(){
        parent::__construct();
        $this->template->set_template('gentelella');
        $this->load->model('Usuario_model','Usuario_model');
        $this->template->write_view('navs', 'template/default_topnavs.php','', true);
        $this->template->write_view('sidenavs', 'template/default_sidenavs', '', true);        
    }
    






    }




















}
    
   