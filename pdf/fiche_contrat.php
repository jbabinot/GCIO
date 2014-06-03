
<?php
include ('../inc/config.php');
$idcontrat = $_GET['idcnt'];
$query_contrat = "SELECT * FROM client, contrat, technicien
    WHERE contrat.idclient = client.idclient
    AND idcnt =".$idcontrat;
$result = mysql_query($query_contrat);
$donnee_contrat = mysql_fetch_array($result);

$msg = "Votre Facture en ligne\r\nhttp://client.lsiinformatique.fr/";
?>
<link rel="stylesheet" type="text/css" href="styles.css">

<page id="inter_info">
    <div id="header">
        <div class="societe">
                <b>LSI INFORMATIQUE</b><br>
                   8 Rue Octave Voyer<br>
                   85100 Les Sables d'Olonne<br>
                   Tel: 02 51 23 24 24<br>
                   <!--
                    <IMG SRC="http://localhost/inter/assets/images/logo_lsi.png">
                    -->
        </div>
        <div class="left">
            <h3>
            <b>BON DE MAINTENANCE N°<?php echo $donnee_contrat['idcnt']; ?></b></h3><br>
            ID: CNT0000<?php echo $donnee_contrat['idcnt']; ?><br>
            Type de contrat:
            <?php
                    if($donnee_contrat['type_cnt'] == 11){echo "<div class='label label-info'>CU2</div>";}
                    if($donnee_contrat['type_cnt'] == 12){echo "<div class='label label-info'>CU4</div>";}
                    if($donnee_contrat['type_cnt'] == 13){echo "<div class='label label-info'>CU12</div>";}
                    if($donnee_contrat['type_cnt'] == 21){echo "<div class='label label-info'>CC4</div>";}
                    if($donnee_contrat['type_cnt'] == 22){echo "<div class='label label-info'>CC8</div>";}
                    if($donnee_contrat['type_cnt'] == 23){echo "<div class='label label-info'>CC16</div>";}
                    if($donnee_contrat['type_cnt'] == 24){echo "<div class='label label-info'>CC32</div>";}
                    if($donnee_contrat['type_cnt'] == 25){echo "<div class='label label-info'>CC64</div>";}
                    if($donnee_contrat['type_cnt'] == 31){echo "<div class='label label-info'>OS1</div>";}
                    if($donnee_contrat['type_cnt'] == 32){echo "<div class='label label-info'>OS4</div>";}
                    if($donnee_contrat['type_cnt'] == 33){echo "<div class='label label-info'>OS8</div>";}
                    if($donnee_contrat['type_cnt'] == 41){echo "<div class='label label-info'>ALL</div>";}
                ?>
            <br>
            <br>
            Date de début : <?php echo $donnee_contrat['date_contrat']; ?><br>
            Date de fin prévu: <?php echo $donnee_contrat['date_fin_contrat']; ?><br>
            Technicien Responsable: 
            <!--
                <?php
                    if($donnee_inter_info['idtechnicien'] == 1){echo "Maxime";}
                    if($donnee_inter_info['idtechnicien'] == 2){echo "Alexis";}
                    if($donnee_inter_info['idtechnicien'] == 3){echo "Valentin";}
                ?>-->
            <br><br>

            <!--<qrcode value="<?php echo $msg; ?>" style="width: 20mm;"></qrcode>-->
            <u><b>Vos Identifiants de connexion:</b></u><br>
            <br>
            Votre Login: <?php echo $donnee_contrat['nom']; ?><br>
            Votre Mot de Passe: Non afficher par sécurité
        </div>
        <div class="right">
            <h2>
                <b><?php echo $donnee_contrat['nom']; ?> <?php echo $donnee_contrat['prenom']; ?></b></h2><br>
            <br>
            <?php echo $donnee_contrat['adresse1']; ?><br>
            <br>
            <?php echo $donnee_contrat['adresse2']; ?>
            <br>
            <?php echo $donnee_contrat['cp']; ?> <?php echo $donnee_contrat['ville']; ?>
            <br>
            Tel: <?php echo $donnee_contrat['tel']; ?><br>
            Portable: <?php echo $donnee_contrat['port']; ?><br>
            Mail: <?php echo $donnee_contrat['mail']; ?>
        </div>
    </div>
    <div id="corps">
        <div class="prestation_realise">
            <div class="titre">Prestation à réaliser</div>
            <div class="box"><?php /*echo $donnee_contrat['desc_probleme']; */?></div>
        </div>
        <div class="inter_materiel">
            <div class="titre">intervention sur</div>
            <div class="box">
                <!--
                <?php
                    if($donnee_contrat['materiel'] == 1){echo "Pc Portable ";}
                    if($donnee_contrat['materiel'] == 2){echo "Pc Fixe ";}
                    if($donnee_contrat['materiel'] == 3){echo "Autre ";}
                ?>-->
                <?php /*echo $donnee_contrat['marque']; ?> <?php echo $donnee_contrat['serie']; */?>
                <br><br>
                N° de Serie: <b><?php /*echo $donnee_contrat['num_serie']; */?></b>
                <br><br>
                Etat du matériel:<br>
                <b><!--
                <?php
                    if($donnee_contrat['etat_materiel'] == 1){echo "Neuf";}
                    if($donnee_contrat['etat_materiel'] == 2){echo "Bon état apparent";}
                    if($donnee_contrat['etat_materiel'] == 3){echo "Etat Moyen";}
                    if($donnee_contrat['etat_materiel'] == 4){echo "Mauvais état";}
                ?>-->
                </b>
            </div>
        </div>
        <div class="materiel_fournis">
            <div class="titre">Matériel Fournis</div>
            <div class="box">
                Accessoire:<br />
                <?php /*echo $donnee_contrat['accessoire']; */?>
                <br>
            </div>
        </div>
        <div class="prix">
            <div class="titre">Prix</div>
            <div class="box">
                <br>
                Prix: <?php echo $donnee_contrat['prix'] ?> €</div>
        </div>
        <div class="signature_client">
            <div class="titre">Signature du Client</div>
            <div class="box"></div>
        </div>
        <div class="signature_technique">
            <div class="titre">Signature du Technicien</div>
            <div class="box"></div>
        </div>
    </div>
</page>
<page_footer>
LSI Informatique - Société SARL au capital de 1000€ - Siret: 753 865 229 00011 - TVA intra: FR56 753 865 229 - APE: 4741Z
</page_footer>
<?php
$content = ob_get_clean();

    // convert in PDF
    require_once(dirname(__FILE__).'/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('exemple01.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
    ?>