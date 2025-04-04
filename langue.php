<?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

 ?>
 <?php  require_once 'header.php'; ?>
 <?php
 require_once 'inc/manager-db.php';
 if (isset($_GET['name']) && !empty($_GET['name']) ){
 $continent = ($_GET['name']);
 $desPays = getCountriesByContinent($continent);
 }
 else{
 $continent = "Monde";
 $desPays = getAllCountries();
 }
 $langues= getLangue();
 ?>


<div class="container">
    <h1> <strong>Langues les plus parlées</strong> </h1>
    <div>
     <table class="table">
         <tr>
           <th>Language</th>
           <th>nb pays</th>
         </tr>
       <?php
       // $desPays est un tableau dont les éléments sont des objets représentant
       // des caractéristiques d'un pays (en relation avec les colonnes de la table Country)
          foreach($langues as $langue) { ?>
          <tr>
            <td> <?php echo $langue->Language?></td>
            <td> <?php echo $langue->NombreDePays?></td>
            
          </tr>
        <?php } ?>
    </table>
    </div>