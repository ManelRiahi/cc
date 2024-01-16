<div class="card-body">
  <div class="row">
    <div class="col-md-3">
      <!-- checkbox -->
      <div class="form-group mb-1">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="autrepuce_satisfaction_ooredoo" name="autresim[]" value="ooredoo">
          <label class="form-check-label">Ooredoo</label>
        </div>


      </div>
    </div>

    <div class="col-md-3">
      <!-- checkbox -->
      <div class="form-group mb-1">

        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="autresim_satisfaction_mobilis" name="autresim[]" value="mobilis">
          <label class="form-check-label">Mobilis</label>
        </div>

      </div>
    </div>
    <div class="col-md-3">
      <!-- checkbox -->
      <div class="form-group mb-1">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="autresim_satisfaction_djezzy" name="autresim[]" value="djezzy">
          <label class="form-check-label">Djezzy</label>
        </div>
      </div>
    </div>
    <div class="col-md-3 ">
      <!-- checkbox -->
      <div class="form-group mb-1">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="autresim_nones" name="autresim[]" value="pas d autre sim">
          <label class="form-check-label">N'utilise pas d'autres SIM</label>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12" id="autrepuce_satisfaction_ooredoo" style="display:none">
    <div class="card card-danger">
      <div class="card-header">
        <h3 class="card-title">ooredoo</h3>
      </div>
      <div class="card-body">
        <!-- <div id="checkedElementDisplay"> -->

          <select class="form-control" name="OffreOoredoo" id="Offre_ooredoo">
            <option value="">Choix de l'offre</option>
            <option value="La Switch">La Switch</option>
            <option value="La Gold">La Gold</option>
            <option value="Haya">Haya</option>
            <option value="La Gold jdida">La Gold jdida</option>
            <option value="Maxy">Maxy</option>
            <option value="Dima Ooredoo">Dima Ooredoo</option>
            <option value="YOOZ">YOOZ</option>
            <option value="Pro 1200">Pro 1200</option>
            <option value="Haya Business">Haya Business</option>
            <option value="Elite">Elite</option>
            <option value="Pro">Pro</option>
            <option value="Pro contrôle">Pro contrôle</option>
            <option value="Ambition">Ambition</option>
            <option value="Shift">Shift</option>
          </select>
        <!-- </div> -->
        <div class="form-group" id="autreoffre_ooredoo" style="display:none">
          <label for="exampleInputEmail1">Autre offre ooredoo </label>
          <input type="text" class="form-control" name="AutreOffreOoredoo" id="AutreOffre_input_ooredoo">
        </div>
        <div class="form-group mt-4">
          <label for="exampleInputEmail1">Pourquoi avoir choisi cette offre :</label>
          <select class="form-control" name="RaisonduchoixOoredoo[]" id="RaisonduchoixOoredoo" multiple>
            <option value="Volume data">Volume data</option>
            <option value="Appels on net">Appels on net</option>
            <option value="Appels off net proposé">Appels off net proposé</option>
            <option value="Appels all net">Appels all net</option>
            <option value="Prix d’achat de la SIM">Prix d’achat de la SIM</option>
            <option value="Prix des forfaits">Prix des forfaits</option>
            <option value="Qualité réseau">Qualité réseau</option>
            <option value="Qualité connexion internet">Qualité connexion internet</option>
            <option value="Pas d'engagement">Pas d'engagement</option>
            <option value="Aucune réponse">Aucune réponse</option>
            <option value="Autre">Autre</option>


          </select>
          <div id="DivRaisonduchoixOoredooAutres"><label for="exampleInputEmail1">Autre raisons</label>
            <input type="text" class="form-control" name="RaisonduchoixOoredooAutres" id="oRaisonduchoixOoredooAutres">

          </div>
        </div>

      </div>
    </div> <!-- end card -->
  </div> <!-- end col autrepuce_ooredoo -->


  <div class="col-12" id="autrepuce_satisfaction_mobilis" style="display:none">
    <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">mobilis</h3>
      </div>
      <div class="card-body">

        <select class="form-control" name="OffreMobilis" id="Offre_mobilis">
          <option value="">Choix de l'offre</option>
          <option value="Sama 1300">Sama 1300</option>
          <option value="Sama Mix">Sama Mix</option>
          <option value="Sama Net">Sama Net</option>
          <option value="Sama Talk">Sama Talk</option>
          <option value="Sam unlimited">Sam unlimited</option>
          <option value="Beking">Beking</option>
          <option value="Win">Win</option>
          <option value="PixX">PixX</option>
          <option value="Sky business">Sky business</option>
          <option value="Win Pro">Win Pro</option>
          <option value="PiXx pro">PiXx pro</option>
          <option value="Sky Pro">Sky Pro</option>
        </select>

        <div class="form-group" id="autreoffre_mobilis" style="display:none">
          <label for="exampleInputEmail1">Autre offre mobilis </label>
          <input type="text" class="form-control" name="AutreOffreMobilis" id="AutreOffre_input_mobilis">
        </div>
        <div class="form-group mt-4">
          <label for="exampleInputEmail1">Pourquoi avoir choisi cette offre :</label>
          <select class="form-control" name="RaisonduchoixMobilis[]" id="RaisonduchoixMobilis" multiple>
            <option value="Volume data">Volume data</option>
            <option value="Appels on net">Appels on net</option>
            <option value="Appels off net proposé">Appels off net proposé</option>
            <option value="Appels all net">Appels all net</option>
            <option value="Prix d’achat de la SIM">Prix d’achat de la SIM</option>
            <option value="Prix des forfaits">Prix des forfaits</option>
            <option value="Qualité réseau">Qualité réseau</option>
            <option value="Qualité connexion internet">Qualité connexion internet</option>
            <option value="Pas d'engagement">Pas d'engagement</option>
            <option value="Aucune réponse">Aucune réponse</option>
            <option value="Autre">Autre</option>

          </select>
          <div id="DivRaisonduchoixMobilisAutres">
            <label for="exampleInputEmail1">Autre raisons</label>
            <input type="text" class="form-control" name="RaisonduchoixMobilisAutres" id="oRaisonduchoixMobilisAutres">
          </div>

        </div>

      </div>
    </div> <!-- end card -->
  </div> <!-- end col autrepuce_mobilis -->


  <div class="col-12" id="autrepuce_satisfaction_djezzy" style="display:none">
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">djezzy</h3>
      </div>
      <div class="card-body">

        <select class="form-control" name="OffreDjezzy" id="Offre_djezzy">
          <option value="">Choix de l'offre</option>
          <option value="Djezzy H’Bal">Djezzy H’Bal</option>
          <option value="Djezzy Hayla Maxi">Djezzy Hayla Maxi</option>
          <option value="Djezzy Hayla Bezzaf">Djezzy Hayla Bezzaf</option>
          <option value="Djezzy Special">Djezzy Special</option>
          <option value="Djezzy ZID">Djezzy ZID</option>
          <option value="Djezzy Confort">Djezzy Confort</option>
          <option value="Entreprise 500">Entreprise 500</option>
          <option value="Entreprise 1000">Entreprise 1000</option>
          <option value="Entreprise 2000">Entreprise 2000</option>
          <option value="Business contrôle">Business contrôle</option>
          <option value="Business libre">Business libre</option>
          <option value="Confort pro">Confort pro</option>
          <option value="Business POP">Business POP</option>
          <option value="Smart S">Smart S</option>
          <option value="Smart M">Smart M</option>
          <option value="Smart L">Smart L</option>
          <option value="Infinity">Infinity</option>
          <option value="VIP">VIP</option>
        </select>

        <div class="form-group" id="autreoffre_djezzy" style="display:none">
          <label for="exampleInputEmail1">Autre offre djezzy </label>
          <input type="text" class="form-control" name="AutreOffreDjezzy" id="AutreOffre_input_djezzy">
        </div>
        <div class="form-group mt-4">
          <label for="exampleInputEmail1">Pourquoi avoir choisi cette offre :</label>
          <select class="form-control" name="RaisonduchoixDjezzy[]" id="RaisonduchoixDjezzy" multiple>
            <option value="Volume data">Volume data</option>
            <option value="Appels on net">Appels on net</option>
            <option value="Appels off net proposé">Appels off net proposé</option>
            <option value="Appels all net">Appels all net</option>
            <option value="Prix d’achat de la SIM">Prix d’achat de la SIM</option>
            <option value="Prix des forfaits">Prix des forfaits</option>
            <option value="Qualité réseau">Qualité réseau</option>
            <option value="Qualité connexion internet">Qualité connexion internet</option>
            <option value="Pas d'engagement">Pas d'engagement</option>
            <option value="Aucune réponse">Aucune réponse</option>
            <option value="Autre">Autre</option>

          </select>
          <div id="DivRaisonduchoixDjezzyAutres"> <label for="exampleInputEmail1">Autre raisons</label>
            <input type="text" class="form-control" name="RaisonduchoixDjezzyAutres" id="oRaisonduchoixDjezzyAutres">
          </div>


        </div>
      </div>
    </div> <!-- end card -->
  </div> <!-- end col autrepuce_djezzy -->

  <!-- <p class="mt-1 bm-1 text-center">
    <button type="button" class="btn btn-success" onClick="javascript:identification();">Continuer</button>
  </p> -->

  <!-- </div> -->
</div>