<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf; 

class CedulaController extends Controller                //Alumno:JESUS ARMANDO ALPUCHE CONRADO
{                                                        //MTRO:JOSE GILBERTO BALAM BALAM
    //                                                     GRUPO:5A
    public function cedula(){

        //Iniciamos la clase 
        $pdf = new Fpdf('P','mm','Letter');
        //Agregamos una pagina
        $pdf->AddPage();

        //Fuente de esta celda
        $pdf->SetFont('Arial','BI',12);
        $pdf->Cell(200,10,utf8_decode('Departamento de Servicios Escolares'),0,1,'R');
        //Seleccionamos la fuente
        $pdf->SetFont('Arial', 'B', 17);
       //Agregamos el logo
       $pdf->Image(public_path().'/img/logo22.png',10,5,28);
        
       $pdf->Cell(180,10,utf8_decode('CEDULA DE PREINSCRIPCIÓN'),0,1,'C');

       $pdf->SetFont('Arial', 'B', 13);
        //FECHAS 
       $pdf->SetXY(30, 30);
       $pdf->Cell(150,10,'Folio:',0,1,'R');
       $pdf->SetLineWidth(0.2);
       $pdf->SetFont('Arial', '', 10);
       $pdf->Text(180,36,'UTC20');
       $pdf->Line(180, 37, 210, 37);
       $pdf->SetFont('Arial', '', 13);
       $pdf->Cell(170,5,'Fecha:',0,1,'R');
       $pdf->Line(180, 44 ,210, 44);

       //Seccion de carreras
       $pdf->SetFont('Arial', 'B', 11);
       $pdf->Text(12,50,utf8_decode('Carrera de su elección:'));
       $pdf->Ln(8);
       $pdf->SetFont('Arial', '', 9);
       $pdf->Cell(110,5,'T.S.U en Agricultura Sustentable y Protegida',1,0,'L');
       $pdf->Cell(10,5,'',1,1,'C');
       $pdf->Cell(110,5,utf8_decode('T.S.U. en Administración área Formulación y Evaluación de Proyectos'),1,0,'L');
       $pdf->Cell(10,5,'',1,1,'C');
       $pdf->Cell(110,5,utf8_decode('Licenciatura en Gastronomía'),1,0,'L');
       $pdf->Cell(10,5,'',1,1,'C');
       $pdf->Cell(110,5,utf8_decode('Licenciatura en Gestión y Desarrollo Turístico'),1,0,'L');
       $pdf->Cell(10,5,'',1,1,'C');
       $pdf->Cell(110,5,utf8_decode('Ingeniería en Tecnologías de la Información'),1,0,'L');
       $pdf->Cell(10,5,'',1,1,'C');
       $pdf->Cell(110,5,utf8_decode('Ingeniería en Mantenimiento Industrial'),1,0,'L');
       $pdf->Cell(10,5,'',1,1,'C');
        //RECUADRO DE COMO SE ENTERO DE LA UNIVERSIDAD
       $pdf->SetFont('Arial', 'B', 11);
       $pdf->Text(135,56,utf8_decode('Cómo se enteró de la Universidad.'));
       $pdf->Ln(8);
       $pdf->SetFont('Arial', '', 8);
       $pdf->SetXY(145, 60);
       $pdf->Cell(36,5,'Visita a mi plantel',1,0,'L');
       $pdf->Cell(10,5,'',1,1,'C');
       $pdf->SetXY(145, 65);
       $pdf->Cell(36,5,'Redes sociales',1,0,'L');
       $pdf->Cell(10,5,'',1,1,'C');
       $pdf->SetXY(145, 70);
       $pdf->Cell(36,5,'Amigos/familiares',1,0,'L');
       $pdf->Cell(10,5,'',1,1,'C');
       $pdf->SetXY(145, 75);
       $pdf->Cell(36,5,'Volantes/ Lonas',1,0,'L');
       $pdf->Cell(10,5,'',1,1,'C');
       $pdf->SetXY(145, 80);
       $pdf->Cell(36,5,'Perifoneo',1,0,'L');
       $pdf->Cell(10,5,'',1,1,'C');
       $pdf->SetXY(145, 85);
       $pdf->Cell(36,5,'Alumno/Docente de la UTC',1,0,'L');
       $pdf->Cell(10,5,'',1,1,'C');
       $pdf->SetFont('Arial', '', 10);
       $pdf->SetXY(145, 95);
       $pdf->Cell(10,5,'Otro:',0,1,'R');
       $pdf->SetLineWidth(0.2);
       $pdf->Line(155, 98.5, 210, 98.5);

       
       //VILLA UNIVERSITARIA
      $pdf->SetFont('Arial', 'B', 11);
       $pdf->Cell(36,1,'Requiere apoyo de Villa Universitaria:',0,0,'L');
       $pdf->SetFont('Arial', '', 11);
       $pdf->SetXY(80, 98);   
       $pdf->Cell(10,5,'Si',0,1,'R');
       $pdf->Rect(90,98,4,4,);
       $pdf->SetFont('Arial', '', 11);
       $pdf->SetXY(95, 98);
       $pdf->Cell(10,5,'No',0,1,'R');
       $pdf->Rect(105,98,4,4,);
       //DATOS GENERALES 
       $pdf->SetFont('Arial', 'B', 11);
       $pdf->Cell(50,10,'DATOS GENERALES:',0,1,'L');
       $pdf->SetFont('Arial', '', 9);
       $pdf->Cell(60,10,'NOMBRE:',0,0,'L');
       $pdf->Text(40,118,'Alpuche Conrado Jesus Armando');
       $pdf->SetLineWidth(0.2);
       $pdf->Line(28, 119, 117, 119);
       $pdf->Cell(60,10,'EDAD:',0,0,'R');
       $pdf->SetLineWidth(0.2);
       $pdf->Line(130, 119, 140, 119);
       $pdf->SetXY(96.5,113);
       $pdf->Cell(60,10,utf8_decode('GÉNERO'),0,0,'R');
       $pdf->SetXY(150, 115.5);
       $pdf->Cell(10,5,'H',0,1,'R');
       $pdf->Rect(160,115.5,4,4,);
       $pdf->SetXY(160, 115.5);
       $pdf->Cell(10,5,'M',0,1,'R');
       $pdf->Rect(170,115.5,4,4,);
       $pdf->SetXY(135,113);
       $pdf->Cell(60,10,utf8_decode('FECHA NAC.'),0,0,'R');
       $pdf->SetLineWidth(0.2);
       $pdf->Line(195, 119, 210, 119);
       //PALABRAS BAJO LA LINEA
       $pdf->SetFont('Arial', '', 7);
       $pdf->Text(40,122,'Paterno');
       $pdf->Text(60,122,'Materno');
       $pdf->Text(80,122,'Nombre(s)');
       $pdf->Text(195,122,utf8_decode('Año-Mes-Día'));
       //
       //CURP Y NSS
       $pdf->Ln(2); 
       $pdf->SetFont('Arial', '', 9);
        $pdf->Cell(60,25,'CURP:',0,0,'L');
        $pdf->Rect(21,124.5,4,4,);
        $pdf->Rect(25,124.5,4,4,);
        $pdf->Rect(29,124.5,4,4,);
        $pdf->Rect(33,124.5,4,4,);
        $pdf->Rect(37,124.5,4,4,);
        $pdf->Rect(41,124.5,4,4,);
        $pdf->Rect(45,124.5,4,4,);
        $pdf->Rect(49,124.5,4,4,);
        $pdf->Rect(53,124.5,4,4,);
        $pdf->Rect(57,124.5,4,4,);
        $pdf->Rect(61,124.5,4,4,);
        $pdf->Rect(65,124.5,4,4,);
        $pdf->Cell(60,25,'NSS:',0,1,'L');
        $pdf->Rect(80,124.5,4,4,);
        $pdf->Rect(84,124.5,4,4,);
        $pdf->Rect(88,124.5,4,4,);
        $pdf->Rect(92,124.5,4,4,);
        $pdf->Rect(96,124.5,4,4,);
        $pdf->Rect(100,124.5,4,4,);
        $pdf->Rect(104,124.5,4,4,);
        $pdf->Rect(108,124.5,4,4,);
        $pdf->Rect(112,124.5,4,4,);
        $pdf->Rect(116,124.5,4,4,);
        $pdf->Rect(120,124.5,4,4,);
        //Cuestionario
        $pdf->Text(11,135,utf8_decode('Dirección:'));
        $pdf->Line(26, 135, 90, 135);
        $pdf->Text(91,135,'Localidad:');
        $pdf->Line(106, 135, 150, 135);
        $pdf->Text(151,135,'Municipio:');
        $pdf->Line(166, 135, 210, 135);
         $pdf->Text(11,143,utf8_decode('Teléfono:'));
         $pdf->Line(26, 143, 95, 143);
         $pdf->Text(96,143,utf8_decode('Correo Electrónico:'));
         $pdf->Line(123.5, 143, 210, 143);
         $pdf->Text(11,150,'Habla maya u otro dialecto:'); 
         $pdf->Line(50, 150, 65, 150);
         $pdf->Text(66,150,utf8_decode('¿Cuál?:')); 
         $pdf->Line(77.5, 150, 100, 150);
         $pdf->Text(101,150,'Presentas alguna discapacidad:');
         $pdf->Line(146.5, 150, 160, 150); 
         $pdf->Text(161,150,'De que tipo:');
         $pdf->Line(178.5, 150, 210, 150); 
         $pdf->Text(11,157,'Tutor:');
         $pdf->Line(20, 157, 101, 157);
         $pdf->Text(102,157,'Parentesco:');
         $pdf->Line(120, 157, 146.5, 157);
         $pdf->Text(147,157,utf8_decode('Teléfono:'));
         $pdf->Line(161, 157, 210, 157);
         //ANTECEDENTES
         $pdf->SetFont('Arial', 'B', 11);
         $pdf->Cell(60,50,utf8_decode('ANTECEDENTES ACADÉMICOS:'),0,1,'L');
         $pdf->SetFont('Arial', '', 9);
         $pdf->Text(11,173,'Escuela de Procedencia:');
         $pdf->Line(46.5, 173, 101, 173);
         $pdf->Text(102,173,'Localidad:');
         $pdf->Line(117, 173, 146.5, 173);
         $pdf->Text(147,173,'Municipio:');
         $pdf->Line(161.5, 173, 210, 173); 
         $pdf->Text(11,178,'Especialidad:');
         $pdf->Line(30, 178, 91, 178);
         $pdf->Text(92,178,utf8_decode('Período:'));
         $pdf->Line(104.5, 178, 146.5, 178);
         $pdf->Text(147,178,'Promedio:');
         $pdf->Line(162, 178, 175, 178);
         $pdf->Text(176,178,'Beca:');
         $pdf->Line(185, 178, 210, 178);
         //documentacion
         $pdf->SetFont('Arial', 'B', 11);
         $pdf->Cell(60,10,utf8_decode('DOCUMENTACIÓN ENTREGADA:'),0,1,'L');
         $pdf->SetFont('Arial', '', 9);
         $pdf->Cell(70,5,'Copia del certificado',1,0,'L');
         $pdf->Cell(10,5,'',1,1,'C');
         $pdf->Cell(70,5,'Constancia de estudios de Bachillerato',1,0,'L');
         $pdf->Cell(10,5,'',1,1,'C');
         $pdf->Cell(70,5,'Copia de la CURP',1,0,'L');
         $pdf->Cell(10,5,'',1,1,'C');
         $pdf->Text(104.5,198,'Bajo protesta de decir verdad manifiesto que me hago responsable');
         $pdf->Text(104.5,202,utf8_decode('de la veracidad de la información proporcionada, así como de la'));
         $pdf->Text(104.5,206,utf8_decode('documentación entregada al Departamento de Servicios Escolares'));
         $pdf->Text(104.5,210,utf8_decode('de la Universidad Tecnológica del Centro.'));
         $pdf->SetLineWidth(0.9);
         $pdf->Line(104.5, 220, 205, 220);
         $pdf->SetFont('Arial', '', 11);
         $pdf->Text(146.5,224,'Aspirante');
         $pdf->SetFont('Arial', '', 9);
         $pdf->Text(11,254,'Sello de Servicios Escolares');
         $pdf->Text(120,254,utf8_decode('Sello de Administración y Finanzas'));
         $pdf->SetFont('Arial', 'I', 9);
         $pdf->Text(11,261,utf8_decode('La Universidad Tecnológica del Centro recabará y tratará datos personales de identificación con el propósito de cumplir con las obligaciones'));
         $pdf->Text(11,265,utf8_decode('derivadas de la relación contraída a partir de su ingreso como estudiante de la UTC.'));
         $pdf->SetFont('Arial', '', 11);
         $pdf->Text(162,270,'F-UTC-SES-01/V00');

         //NUEVA PAGINA
         $pdf->AddPage();
         $pdf->SetFont('Arial','BI',12);
         $pdf->Cell(200,10,utf8_decode('Departamento de Servicios Escolares'),0,1,'R');
         $pdf->SetFont('Arial', 'B', 15);
         //Agregamos el logo
         $pdf->Image(public_path().'/img/logo22.png',10,5,28);
          
         $pdf->Cell(180,10,utf8_decode('Ficha de Preinscripción'),0,1,'C');
         $pdf->SetFont('Arial', 'B', 13);
         //FECHAS 
        $pdf->SetXY(30, 30);
        $pdf->Cell(150,10,utf8_decode('Matrícula:'),0,1,'R');
        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(180,36,'UTC20');
        $pdf->SetLineWidth(0.2);
        $pdf->Line(180, 37, 210, 37);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(11,50,'NOMBRE:');
        $pdf->SetLineWidth(0.5);
        $pdf->Line(28, 50, 121, 50);
        $pdf->Text(123,50,'CARRERA:');
        $pdf->Line(142, 50, 210, 50);
        $pdf->Text(11,60,utf8_decode('Para concluir el proceso de registro es necesario que lo realices a través del portal del CENEVAL:'));
        $link = 'http://registroenlinea.ceneval.edu.mx/RegistroLinea/indexCerrado.php';
        $pdf->Text(35,70, $link);
        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(11,80,utf8_decode('***(verificar el uso de mayúsculas y puntos donde corresponda)'));
        $pdf->Text(20,90,utf8_decode(' Seleccionar de la lista de Universidades la UNIVERSIDAD TECNOLÓGICA DEL CENTRO'));
        $pdf->Image(public_path().'/img/viñeta.png',10,85,8,8);
        $pdf->Text(20,100,utf8_decode('En el apartado de matrícula deberás ingresar la asignada al momento de tu pre- registro'));
        $pdf->Image(public_path().'/img/viñeta.png',10,95,8,8);
        $pdf->Text(20,110,utf8_decode('Seleccionar la carrera para la cual te pre-registraste'));
        $pdf->Image(public_path().'/img/viñeta.png',10,105,8,8);
        $pdf->Text(20,120,utf8_decode('En campus seleccionar nuevamente UNIVERSIDAD TECNOLÓGICA DEL CENTRO'));
        $pdf->Image(public_path().'/img/viñeta.png',10,115,8,8);
        $pdf->Text(20,130,utf8_decode('Crear tu contraseña'));
        $pdf->Image(public_path().'/img/viñeta.png',10,125,8,8);
        $pdf->Text(20,140,utf8_decode('Editar datos de tu registro. Llenar toda la información solicitada'));
        $pdf->Image(public_path().'/img/viñeta.png',10,135,8,8);
        $pdf->Text(20,150,utf8_decode('Imprimir pase de ingreso.'));
        $pdf->Image(public_path().'/img/viñeta.png',10,145,8,8);
        //
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(11,160,utf8_decode('FECHA DE APLICACIÓN DE EXAMEN:'));
        $pdf->SetFont('Arial', '', 10);
        $pdf->Text(164,160,utf8_decode('HORARIO:'));
        $pdf->SetLineWidth(0.2);
        $pdf->Line(182, 160, 198, 160);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(182,159.5,'8:00 a.m');
        //
        $pdf->SetXY(10, 165);
        $pdf->Cell(70,5,utf8_decode('Sábado 15 de agosto de 2020'),1,0,'L');
        $pdf->Cell(75,5,utf8_decode('Gastronomía'),1,1,'L');
        $pdf->Cell(70,5,utf8_decode('Domingo 16 de agosto de 2020'),1,0,'L');
        $pdf->Cell(75,5,utf8_decode('Administración / Turismo'),1,1,'L');
        $pdf->Cell(70,5,utf8_decode('Lunes 17 de agosto de 2020'),1,0,'L');
        $pdf->Cell(75,5,utf8_decode('Tecnologías / Mantenimiento / Agricultura'),1,1,'L');
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Text(8,190,utf8_decode('El día del examen deberás traer:'));
        $pdf->SetFont('Arial', '', 9);
        $pdf->Text(57,190,utf8_decode(' Pase de Ingreso emitido por CENEVAL, identificación con fotografía lápiz mirado #2, borrador, sacapuntas.'));
        //
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(35,200,utf8_decode('PUBLICACIÓN DE RESULTADOS:'));
        $pdf->Text(96,199.5,utf8_decode('25 de agosto de 2020'));
        $pdf->Text(139,199.5,utf8_decode('www. utcentro.edu.mx'));
        $pdf->Line(96, 200, 131, 200);
        $pdf->Line(139, 200, 177, 200);
        $pdf->Text(35,209,utf8_decode('INSCRIPCIONES:'));
        $pdf->Text(65,208.5,utf8_decode('Del 25 al 28 de agosto de 2020'));
        $pdf->Line(65, 209, 117, 209);
        $pdf->Text(122,208.5,utf8_decode('Horario de 8:00 a 12:00 hrs.'));
        $pdf->Line(122, 209, 171, 209);
        //
        $pdf->SetXY(40, 214);
        $pdf->Cell(130,15,utf8_decode(''),1,1,'C');
        $pdf->SetFont('Arial', '', 7);
        $pdf->Text(41,216.2,utf8_decode('REQUISITOS DE INSCRIPCIÓN'));
        $pdf->SetFont('Arial', 'B', 7);
        $pdf->Text(41,219.5,'Certificado de Bachillerato');
        $pdf->Text(41,222.5,'Acta de Nacimiento');
        $pdf->Text(41,225.5,'CURP');
        $pdf->Text(81,219.5,'Original y 1 copia');
        $pdf->Text(81,222.5,'Original y 1 copia');
        $pdf->Text(81,225.5,'1 copia');
        $pdf->Text(121,219.5,'Comprobante de domicilio 1 Copia');
        $pdf->Text(121,222.5,utf8_decode('1 Fotografía tamaño Infantil'));
        $pdf->Image(public_path().'/img/facebook.png',65,235,5,5);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Text(71,239,'UTC Izamal');
        $pdf->Image(public_path().'/img/telefono.png',93,235,6,6);
        $pdf->Text(101,239,'988 95 4 03 33 ext 112, 113');
        $pdf->SetFont('Arial', 'B', 7);
        $pdf->Text(45,245,utf8_decode('NOTA: Para cualquier aclaración comunicarse al correo'));
        $pdf->Text(112,245,utf8_decode('servicios.escolares@utcentro.edu.mx'));
        $pdf->Text(8,255,utf8_decode('La Universidad Tecnológica del Centro recabará y tratará datos personales de identificación con el propósito de cumplir con las obligaciones derivadas de la relación'));
        $pdf->Text(65,259,utf8_decode('contraída a partir de su ingreso como estudiante de la UTC'));


 

        //Al final, envia el pdf a la pantalla
    $pdf->Output('I', utf8_decode('Cédula de Preinscripción.pdf'));
    exit;


    }
}
