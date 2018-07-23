<?php
    session_start();
    include_once("conexion.php");
    require('./fpdf/fpdf.php');



    $lavadoras = $_POST['cantLavadoras'];
    $costoLav = $lavadoras*300;
    $etiquetadoras = $_POST['cantEtiq'];
    $costoEt = $etiquetadoras*150;
    $llenadoras = $_POST['cantLlenadoras'];
    $costoLle = $llenadoras * 200;
    $pasteurizadoras = $_POST['cantPast'];
    $costoPast = $pasteurizadoras * 160;
    $lineas = $_POST['cantAcLi'];
    $costoLi = $lineas * 500;
    $transporte = $_POST['cantTrans'];
    $costoTrans = $transporte * 450;
    $ensambladores = $_POST['cantEmbaladores'];
    $costoEnsam = $ensambladores * 700;

    $arrayFecha =  getdate();
    $dia = $arrayFecha['mday'];
    $mes = $arrayFecha['mon'];
    $anyo = $arrayFecha['year'];
    $fecha = "$anyo-$mes-$dia";

    $cantidades = $lavadoras + $etiquetadoras + $llenadoras + $pasteurizadoras + $lineas + $transporte + $ensambladores;
    $costoTotal = $costoLav + $costoEt + $costoLle + $costoPast + $costoLi + $costoTrans + $costoEnsam;
    $username = $_SESSION['user'];

    $queryConsultaUser = $mysqli->query("SELECT * FROM usuarios WHERE usuarios.username = '$username'");

    $fila=mysqli_fetch_array($queryConsultaUser);

    $userId = $fila['id_usuario'];
    $userName = $fila['username'];

    $queryInsertar = $mysqli->query("INSERT INTO `cotizaciones` (`numero_Cotizacion`, `fecha_Cotizacion`, `usuario`, `monto_Cotizacion`, `nota`) VALUES (NULL, '$fecha', '$userId', '$costoTotal', '')");
    
    $queryConsCot = $mysqli->query("SELECT * from cotizaciones");

    $numCot = $queryConsCot->num_rows;

    // $fila=mysqli_fetch_array($queryConsCot);

    // $numCot = $fila['numero_Cotizacion'];

    if($lavadoras > 0){
        $queryInsertar = $mysqli->query("INSERT INTO `product_coti` (`id_productcoti`, `cantidadproduct`, `id_Producto`, `id_Cotizacion`) VALUES (NULL, $lavadoras, '1', $numCot)");
    }
    if($etiquetadoras > 0){
        $queryInsertar = $mysqli->query("INSERT INTO `product_coti` (`id_productcoti`, `cantidadproduct`, `id_Producto`, `id_Cotizacion`) VALUES (NULL, $etiquetadoras, '2', $numCot)");
    }
    if($llenadoras > 0){
        $queryInsertar = $mysqli->query("INSERT INTO `product_coti` (`id_productcoti`, `cantidadproduct`, `id_Producto`, `id_Cotizacion`) VALUES (NULL, $llenadoras, '3', $numCot)");
    }
    if($pasteurizadoras > 0){
        $queryInsertar = $mysqli->query("INSERT INTO `product_coti` (`id_productcoti`, `cantidadproduct`, `id_Producto`, `id_Cotizacion`) VALUES (NULL, $pasteurizadoras, '4', $numCot)");
    }
    if($lineas > 0){
        $queryInsertar = $mysqli->query("INSERT INTO `product_coti` (`id_productcoti`, `cantidadproduct`, `id_Producto`, `id_Cotizacion`) VALUES (NULL, $lineas, '5', $numCot)");
    }
    if($transporte > 0){
        $queryInsertar = $mysqli->query("INSERT INTO `product_coti` (`id_productcoti`, `cantidadproduct`, `id_Producto`, `id_Cotizacion`) VALUES (NULL, $transporte, '6', $numCot)");
    }
    if($ensambladores > 0){
        $queryInsertar = $mysqli->query("INSERT INTO `product_coti` (`id_productcoti`, `cantidadproduct`, `id_Producto`, `id_Cotizacion`) VALUES (NULL, $ensambladores, '7', $numCot)");
    }

    if($userName != null && $userName != ''){
        class PDF extends FPDF {
            function Header(){
                $this->SetFont('Arial','B',15);
                
                //dummy cell to put logo
                //$this->Cell(12,0,'',0,0);
                //is equivalent to:
                $this->Cell(12);
                
                //put logo
                $this->Image('./imagenes/solinca-logo-160 nefro.png',10,10,30);
            }
            function Footer(){
                //add table's bottom line
                $this->Cell(190,0,'','T',1,'',true);
                
                //Go to 1.5 cm from bottom
                $this->SetY(-15);
                        
                $this->SetFont('Arial','',8);
                
                //width = 0 means the cell is extended up to the right margin
                $this->Cell(0,10,'Page '.$this->PageNo()." / 1",0,0,'C');
            }
        }
        
        
        //A4 width : 219mm
        //default margin : 10mm each side
        //writable horizontal : 219-(10*2)=189mm
        
        $pdf = new PDF('P','mm','A4'); //use new class
        
        //define new alias for total page numbers
        $pdf->AliasNbPages('1');
        
        $pdf->SetAutoPageBreak(true,15);
        $pdf->AddPage();
        
        $pdf->SetFont('Arial','',9);
        $pdf->SetDrawColor(180,180,255);
        $cont = 1;
        
        $pdf = new PDF();
        $pdf->AddPage();
        
        
        //dummy cell to give line spacing
        //$pdf->Cell(0,5,'',0,1);
        //is equivalent to:
        
        
        $pdf->SetFillColor(255,255,255);
        $pdf->SetDrawColor(255,255,255);
        $pdf->Ln(12);
        $pdf->SetFont('Arial','B',16);
        $pdf->Cell(140,10,'SOLUCIONES INDUSTRIALES C.A.',1,0,'C', true);
        $pdf->SetFont('Arial','',16);
        $pdf->SetFillColor(41, 128, 185);
        $pdf->SetDrawColor(41, 128, 185);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Cell(36,10,'Cotizacion # ',1,0,'', true);
        $pdf->SetFillColor(255,255,255);
        $pdf->SetDrawColor(255,255,255);
        $pdf->SetTextColor(231, 76, 60);
        $pdf->Cell(20,10,$numCot,1,0,'', true);
        $pdf->SetFillColor(41, 128, 185);
        $pdf->SetDrawColor(41, 128, 185);
        $pdf->SetTextColor(255, 255, 255);
        $pdf->Ln(15);
        $pdf->Cell(45.5,5,'Cliente/Usuario: ',1,0,'',true);
        $pdf->Cell(30.5,5, $userName ,1,0,'',true);
        $pdf->Ln(7);
        $pdf->Cell(47,5,'Item',1,0,'',true);
        $pdf->Cell(47,5,'Producto',1,0,'',true);
        $pdf->Cell(47,5,'Cantidad',1,0,'',true);
        $pdf->Cell(47,5,'Total',1,0,'',true);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->Ln(5);
        if($lavadoras > 0){
            $pdf->Ln(5);
            $pdf->SetFont('Arial','',11);
            $pdf->Cell(47,5, $cont,1,0);
            $pdf->Cell(47,5, 'Lavadoras',1,0);
            $pdf->Cell(47,5, $lavadoras,1,0);
            $pdf->Cell(47,5, $costoLav,1,0);
            $pdf->Ln(5);
            $cont = $cont+1;
        }
        if($etiquetadoras > 0){
            $pdf->SetFont('Arial','',11);
            $pdf->Cell(47,5, $cont,1,0);
            $pdf->Cell(47,5, 'Etiquetadoras',1,0);
            $pdf->Cell(47,5, $etiquetadoras,1,0);
            $pdf->Cell(47,5, $costoEt,1,0);
            $pdf->Ln(5);
            $cont = $cont+1;
        }
        if($llenadoras > 0){
            $pdf->SetFont('Arial','',11);
            $pdf->Cell(47,5, $cont,1,0);
            $pdf->Cell(47,5, 'Llenadoras',1,0);
            $pdf->Cell(47,5, $llenadoras,1,0);
            $pdf->Cell(47,5, $costoLle,1,0);
            $pdf->Ln(5);
            $cont = $cont+1;
        }
        if($pasteurizadoras > 0){
            $pdf->SetFont('Arial','',11);
            $pdf->Cell(47,5, $cont,1,0);
            $pdf->Cell(47,5, 'Pasteurizadoras',1,0);
            $pdf->Cell(47,5, $pasteurizadoras,1,0);
            $pdf->Cell(47,5, $costoPast,1,0);
            $pdf->Ln(5);
            $cont = $cont+1;
        }
        if($lineas > 0){
            $pdf->SetFont('Arial','',11);
            $pdf->Cell(47,5, $cont,1,0);
            $pdf->Cell(47,5, 'Acc. de Lineas',1,0);
            $pdf->Cell(47,5, $lineas,1,0);
            $pdf->Cell(47,5, $costoLi,1,0);
            $pdf->Ln(5);
            $cont = $cont+1;
        }
        if($transporte > 0){
            $pdf->SetFont('Arial','',11);
            $pdf->Cell(47,5, $cont,1,0);
            $pdf->Cell(47,5, 'Vias de Transporte',1,0);
            $pdf->Cell(47,5, $transporte,1,0);
            $pdf->Cell(47,5, $costoTrans,1,0);
            $pdf->Ln(5);
            $cont = $cont+1;
        }
        if($ensambladores > 0){
            $pdf->SetFont('Arial','',11);
            $pdf->Cell(47,5, $cont,1,0);
            $pdf->Cell(47,5, 'Emb. y Desemb.',1,0);
            $pdf->Cell(47,5, $ensambladores,1,0);
            $pdf->Cell(47,5, $costoEnsam,1,0);
            $pdf->Ln(5);
            $cont = $cont+1;
        }
        if($cont > 1){
            $pdf->Ln(7);
            $pdf->SetFont('Arial','B',11);
            $pdf->Cell(94,5, 'Total',1,0);
            // $pdf->Cell(47,5, '',1,0);
            $pdf->Cell(47,5, $cantidades,1,0);
            $pdf->Cell(47,5, $costoTotal,1,0);
        }
        ob_end_clean();
        $pdf->OutPut();
    }
?>