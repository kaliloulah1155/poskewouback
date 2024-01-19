<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use Codedge\Fpdf\Fpdf\Fpdf;
// use PDF; 

use Illuminate\Http\Request;


class Custom_FPDF extends Fpdf
{
protected $FontSpacingPt;      // current font spacing in points
protected $FontSpacing;        // current font spacing in user units

function SetFontSpacing($size)
{
    if($this->FontSpacingPt==$size)
        return;
    $this->FontSpacingPt = $size;
    $this->FontSpacing = $size/$this->k;
    if ($this->page>0)
        $this->_out(sprintf('BT %.3f Tc ET', $size));
}

protected function _dounderline($x, $y, $txt)
{
    // Underline text
    $up = $this->CurrentFont['up'];
    $ut = $this->CurrentFont['ut'];
    $w = $this->GetStringWidth($txt)+$this->ws*substr_count($txt,' ')+(strlen($txt)-1)*$this->FontSpacing;
    return sprintf('%.2F %.2F %.2F %.2F re f',$x*$this->k,($this->h-($y-$up/1000*$this->FontSize))*$this->k,$w*$this->k,-$ut/1000*$this->FontSizePt);
}
}





class PdfController extends Controller
{

    protected $fpdf;
 
    public function __construct()
    {
        //$this->fpdf = new Fpdf;
      //  $pdf_formulaire = new Fpdf('p','mm',array(210,297));

        $this->fpdf = new Custom_FPDF('p','mm',array(210,297));
    }


    //
    public function Pdfgeneration (request $request){

       

       //  return($calendarData);

        //$pdfPVC = new fpdf('p','mm',array(210,297));//Definir taille du document si pas taille standard
                // $pdf_formulaire->SetMargins(0,0);//Mettre les marges a 0
                // $pdf_formulaire->AddPage();//Creer une nouvlle page dans le document
                // $pdf_formulaire->SetAutoPageBreak(false);
                // $pdf_formulaire->Image('images/FactureCIE_1.jpg',0,0,210,297);

        // $this->fpdf->SetFont('Arial', 'B', 15);
        // $this->fpdf->AddPage("L", ['100', '100']);
        // $this->fpdf->Text(10, 10, "Hello World!");       
        // $this->fpdf->Output();


        $this->fpdf->SetMargins(0,0);//Mettre les marges a 0
        $this->fpdf->AddPage();//Creer une nouvlle page dans le document
        $this->fpdf->SetAutoPageBreak(false);
             
        $this->fpdf->Image('assets/img/formulaire_passeport_ci.jpg',0,0,210,297);

        $this->fpdf->AddFont('Segoe UI','','Segoe UI.php');
        


        // $this->fpdf->SetTextColor(125,125,125);
        $this->fpdf->SetFont('Segoe UI','',9);
        $this->fpdf->SetFontSpacing(11.5);
        // $this->fpdf->SetXY(60,84.8);
        //$this->fpdf->Text(32, 30, "H   E   L   L   O WORLD");  $_GET['subject'
        $this->fpdf->Text(32.5, 30,  strtoupper($request->nom_demandeur));   
        $this->fpdf->Text(32.5, 35.5, strtoupper($request->prenom_demandeur)); 

         //$this->fpdf->Text(43.5, 35.5, strtoupper($request->sexe)); 




           //staille sex H
         if ($request->sexe ==1) {
             // code...homme
             $this->fpdf->Text(130.2, 65, strtoupper('X')); 
         }


          if ($request->sexe ==0) {
             // code...femme
             $this->fpdf->Text(142, 65, strtoupper('w')); 
         }

         if ($request->sitmat == 'C') {
              //sit matrimonial C
         $this->fpdf->Text(79,74, "X"); 
         }

          if ($request->sitmat == 'D') {
          //sit matrimonial D
         $this->fpdf->Text(91,74, "X");
         }

          if ($request->sitmat == 'M') {
         //sit matrimonial V
          $this->fpdf->Text(85,74, "X"); 
         }


         if ($request->sitmat == 'V') {
         //sit matrimonial V
         $this->fpdf->Text(97,74, "X"); 
         }
       


         //  //sit matrimonial M
         // $this->fpdf->Text(85,74, "X"); 

         // //sit matrimonial C
         // $this->fpdf->Text(79,74, "X"); 

         //  //sit matrimonial D
         // $this->fpdf->Text(91,74, "X");

         //  //sit matrimonial V
         // $this->fpdf->Text(97,74, "X"); 
        

         


           //staille
         $this->fpdf->Text(131,74, strtoupper($request->taille)); 

        
         $datenaiss_array = explode('/',$request->date_naiss);
         $this->fpdf->Text(43.5, 65.2, strtoupper($datenaiss_array[0])); 
         $this->fpdf->Text(61.5, 65.2, strtoupper($datenaiss_array[1])); 
         $this->fpdf->Text(77.5, 65.2, strtoupper($datenaiss_array[2])); 


        $this->fpdf->Text(38, 91.2, strtoupper($request->lieu_naissance)); 

        $this->fpdf->Text(38, 91.2, strtoupper($request->lieu_naissance)); 
        $this->fpdf->Text(38, 96.7, strtoupper($request->pays_naissance)); 


        $this->fpdf->Text(38, 91.2, strtoupper($request->lieu_naissance)); 
        $this->fpdf->Text(38, 96.7, strtoupper($request->pays_naissance));  

        $this->fpdf->Text(38, 105.2, strtoupper($request->profession)); 
        $this->fpdf->Text(38, 110.7, "VOIR PHOTO");  
        $this->fpdf->Text(50.3, 116.8, strtoupper($request->numpassport));  
        $this->fpdf->Text(38.5, 122,strtoupper($request->numpiece));  


        $this->fpdf->Text(38.8, 131, strtoupper($request->region)); 
        $this->fpdf->Text(38, 138, strtoupper($request->departement));    
        $this->fpdf->Text(38.5, 145.3, strtoupper($request->ville));

        $this->fpdf->Text(38, 153, strtoupper($request->ville)); 
        $this->fpdf->Text(38, 160, "RUE");    
        $this->fpdf->Text(38.5, 167.3, strtoupper($request->boite_postale) );

        $this->fpdf->Text(38.5, 174.5, strtoupper($request->telephonerdv));
        $this->fpdf->Text(38.5, 179.9,strtoupper($request->nom_pere));
        $this->fpdf->Text(38.5, 185.4, strtoupper($request->prenom_pere));
        $this->fpdf->Text(44.5, 190.9, strtoupper($request->datenaiss_pere));


        $this->fpdf->Text(38.5, 196.8, strtoupper($request->nom_mere));
        $this->fpdf->Text(38.5, 202.6, strtoupper($request->prenoms_mere));
        $this->fpdf->Text(44.5, 208, strtoupper($request->datenaiss_mere));
        $this->fpdf->Text(38.5, 213.8, strtoupper($request->nom_conjoint));
        $this->fpdf->Text(38.5, 219.4, strtoupper($request->prenoms_conjoint));

        $this->fpdf->Text(44.5, 224.8, strtoupper(str_replace('/', ' ', $request->datenaiss_conj)));


        $this->fpdf->Text(44.5, 230.4,strtoupper(str_replace('/', ' ', $request->date_mariage)));
        $this->fpdf->Text(44.5, 236, strtoupper($request->lieu_mariage));

         // $this->fpdf->Text(67, 241.6, "PERSONNE A CONTACTER EN CI NOM");
         // $this->fpdf->Text(67, 247, "PERSONNE A CONTACTER EN CI PRENOM");
         // $this->fpdf->Text(44.5, 252.3, "DATE NAISSANCE`CONTACT");
         // $this->fpdf->Text(44.5, 259, "CONTACT TELEPHONIQUE CONTACT");

        $this->fpdf->Output();


        //$pdf_file = Fpdf::loadView('pdf_file.pdf');
        //return $this->fpdf->download($pdf_file);


        // $this->fpdf->Output($nomfacture,'I');
        // $pdfPVC->Output($nomfacture,'I');

        // $pdf_file = 'download.pdf';

        // $pdf_path = 'public/docs/'.$pdf_file;

        // $pdf->save($pdf_path);

        // return asset($pdf_path);

       // exit;


    }



    public function generatepdfdiasp (request $request){

       

       


        $this->fpdf->SetMargins(0,0);//Mettre les marges a 0
        $this->fpdf->AddPage();//Creer une nouvlle page dans le document
        $this->fpdf->SetAutoPageBreak(false);
             
        $this->fpdf->Image('assets/img/formulaire_passeport_diaspora.jpg',0,0,210,297);

        $this->fpdf->AddFont('Segoe UI','','Segoe UI.php');
        


        // $this->fpdf->SetTextColor(125,125,125);
        $this->fpdf->SetFont('Segoe UI','',9);
        $this->fpdf->SetFontSpacing(11.5);
        // $this->fpdf->SetXY(60,84.8);
        //$this->fpdf->Text(32, 30, "H   E   L   L   O WORLD");  $_GET['subject'
        $this->fpdf->Text(32.5, 30,  strtoupper($request->nom_demandeur));   
        $this->fpdf->Text(32.5, 35.5, strtoupper($request->prenom_demandeur)); 




          //staille sex H
         if ($request->sexe ==1) {
             // code...homme
             $this->fpdf->Text(130.2, 65, strtoupper('X')); 
         }


          if ($request->sexe ==0) {
             // code...femme
             $this->fpdf->Text(142, 65, strtoupper('w')); 
         }

         if ($request->sitmat == 'C') {
              //sit matrimonial C
         $this->fpdf->Text(79,74, "X"); 
         }

          if ($request->sitmat == 'D') {
          //sit matrimonial D
         $this->fpdf->Text(91,74, "X");
         }

          if ($request->sitmat == 'M') {
         //sit matrimonial V
          $this->fpdf->Text(85,74, "X"); 
         }


         if ($request->sitmat == 'V') {
         //sit matrimonial V
         $this->fpdf->Text(97,74, "X"); 
         }


           //staille
         $this->fpdf->Text(131,74, strtoupper($request->taille)); 



        
         $datenaiss_array = explode('/',$request->date_naiss);
         $this->fpdf->Text(43.5, 65.2, strtoupper($datenaiss_array[0])); 
         $this->fpdf->Text(61.5, 65.2, strtoupper($datenaiss_array[1])); 
         $this->fpdf->Text(77.5, 65.2, strtoupper($datenaiss_array[2])); 


        $this->fpdf->Text(38, 91.2, strtoupper($request->lieu_naissance)); 

        $this->fpdf->Text(38, 91.2, strtoupper($request->lieu_naissance)); 
        $this->fpdf->Text(38, 96.7, strtoupper($request->pays_naissance)); 


        $this->fpdf->Text(38, 91.2, strtoupper($request->lieu_naissance)); 
        $this->fpdf->Text(38, 96.7, strtoupper($request->pays_naissance));  

        $this->fpdf->Text(38, 105.2, strtoupper($request->profession)); 
        $this->fpdf->Text(38, 110.7, "VOIR PHOTO");  
        $this->fpdf->Text(50.3, 116.8, strtoupper($request->numpassport));  
        $this->fpdf->Text(38.5, 122,strtoupper($request->numpiece));  


        $this->fpdf->Text(38.8, 131, strtoupper($request->region)); 
        $this->fpdf->Text(38, 138, strtoupper($request->departement));    
        $this->fpdf->Text(38.5, 145.3, strtoupper($request->ville));

        $this->fpdf->Text(38, 153, strtoupper($request->ville)); 
        $this->fpdf->Text(38, 160, "RUE");    
        $this->fpdf->Text(38.5, 167.3, strtoupper($request->boite_postale) );

        $this->fpdf->Text(38.5, 174.5, strtoupper($request->telephonerdv));
        $this->fpdf->Text(38.5, 179.9,strtoupper($request->nom_pere));
        $this->fpdf->Text(38.5, 185.4, strtoupper($request->prenom_pere));
        $this->fpdf->Text(44.5, 190.9, strtoupper($request->datenaiss_pere));


        $this->fpdf->Text(38.5, 196.8, strtoupper($request->nom_mere));
        $this->fpdf->Text(38.5, 202.6, strtoupper($request->prenoms_mere));
        $this->fpdf->Text(44.5, 208, strtoupper($request->datenaiss_mere));
        $this->fpdf->Text(38.5, 213.8, strtoupper($request->nom_conjoint));
        $this->fpdf->Text(38.5, 219.4, strtoupper($request->prenoms_conjoint));

        $this->fpdf->Text(44.5, 224.8, strtoupper(str_replace('/', ' ', $request->datenaiss_conj)));


        $this->fpdf->Text(44.5, 230.4,strtoupper(str_replace('/', ' ', $request->date_mariage)));
        $this->fpdf->Text(44.5, 236, strtoupper($request->lieu_mariage));



         $this->fpdf->Text(67, 241.6, strtoupper($request->person_lastname_contact));
         $this->fpdf->Text(67, 247, strtoupper($request->person_firstname_contact));
         $this->fpdf->Text(44.5, 252.3, strtoupper(str_replace('/', ' ', $request->person_contact_birthdate)));
         $this->fpdf->Text(44.5, 259, strtoupper($request->person_contact_number_phone));

         

        $this->fpdf->Output();


        //$pdf_file = Fpdf::loadView('pdf_file.pdf');
        //return $this->fpdf->download($pdf_file);


        // $this->fpdf->Output($nomfacture,'I');
        // $pdfPVC->Output($nomfacture,'I');

        // $pdf_file = 'download.pdf';

        // $pdf_path = 'public/docs/'.$pdf_file;

        // $pdf->save($pdf_path);

        // return asset($pdf_path);

       // exit;


    }






    
}
