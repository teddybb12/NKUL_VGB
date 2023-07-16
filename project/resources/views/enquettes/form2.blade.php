@extends('layouts.mainlayout2')

@section('maincontent')
<!-- SELECT2 EXAMPLE -->
<form id="regForm" action="{{route('store2')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card shadow border-radius">
        <div class="card-body">
            <div class="row">
                <div class="tab">
                    <input name="users_id" type="text" value="{{ Auth::User()->id }}" hidden>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Date couverture</label>
                            <input type="date" name="date_couverture" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Code unique</label>
                            <input type="text" name="code_unique" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Type de violence / violation</label>
                            <select name="type_violence_violation" class="form-control select1" style="width: 100%;">
                                <option value="Violences physiques">Violences physiques</option>
                                <option value="Violences psychologiques">Violences psychologiques</option>
                                <option value="Violences sexuelles">Violences sexuelles</option>
                                <option value="Arrestation arbitraire">Arrestation arbitraire</option>
                                <option value="Meurtre/Assassinat">Meurtre/Assassinat</option>
                                <option value="Refus de services et soins de santé">Refus de services et soins de santé</option>
                                <option value="Arnaque-Chantage-Extorsion">Arnaque-Chantage-Extorsion</option>
                                <option value="Discours haineux">Discours haineux</option>
                                <option value="Violence économique">Violence économique</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nature de la violence</label>
                            <input type="text" name="nature_violence" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Identité du genre</label>
                            <select name="identite_genre" class="form-control select1" style="width: 100%;">
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                                <option value="Trans-homme">Trans-homme</option>
                                <option value="Trans-femme">Trans-femme</option>
                                <option value="Trans-non-binaire">Trans-non-binaire</option>
                                <option value="Queer">Queer</option>
                                <option value="Intersexe">Intersexe</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Age</label>
                            <input type="number" name="age" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Let</label>
                            <input type="text" name="let" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Occupation</label>
                            <input type="text" name="occupation" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Pays</label>
                            <select name="pays" class="form-control select1" style="width: 100%;">
                                <option value="Cameroun">Cameroun</option>
                                <option value="Centrafrique">Centrafrique</option>
                                <option value="Congo">Congo</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Guinée-Equatoriale">Guinée-Equatoriale</option>
                                <option value="Tchad">Tchad</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ville</label>
                            <input type="text" name="ville" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Quartier</label>
                            <input type="text" name="quartier" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Date incident</label>
                            <input type="date" name="date_incident" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Lieu incident</label>
                            <input type="text" name="lieu_incident" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Source information</label>
                            <select name="source_information" class="form-control select1" style="width: 100%;">
                                <option value="Survivant">Survivant</option>
                                <option value="Témoin">Témoin</option>
                                <option value="Réseaux sociaux">Réseaux sociaux</option>
                                <option value="Médias">Médias</option>
                                <option value="Auteur de l’incident">Auteur de l’incident</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Mode de collecte</label>
                            <select name="mode_collect" class="form-control select1" style="width: 100%;">
                                <option value="Interview face à face">Interview face à face</option>
                                <option value="Téléphone">Téléphone</option>
                                <option value="Analyse médias">Analyse médias</option>
                                <option value="Fouille documentaire">Fouille documentaire</option>
                                <option value="Observation terrain">Observation terrain</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Transition</label>
                            <select name="transition" class="form-control select1" style="width: 100%;">
                                <option value="Pas commencé">Pas commencé</option>
                                <option value="Commencé">Commencé</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Etat de passing</label>
                            <select name="etat_passing" class="form-control select1" style="width: 100%;">
                                <option value="Aucun">Aucun</option>
                                <option value="Partiel">Partiel</option>
                                <option value="Complet">Complet</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Auteur de la violence</label>
                            <input type="text" name="auteur_violence" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ancien.ne/nouveau.elle</label>
                            <input type="text" name="ancien" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Référer pour</label>
                            <input type="text" name="referer_pour" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Organisation référé</label>
                            <input type="text" name="organisation_refere" class="form-control select" style="width: 100%;" required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="m-3">
            <button onClick="return confirm('You sure??');" class="btn btn-dark" type="submit">Enregistrer</button>
            <button class="btn btn-danger" type="reset">Annuler</button>
        </div> -->
        <div style="overflow:auto;" class="col-md-12 px-4 py-4">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Precedent</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Suivant</button>
            </div>
        </div>
    </div>
</form>
<!-- /.card -->

<style>

#regForm {
  /* background-color: #ffffff; */
  margin: 100px auto;
  font-family: Raleway;
  /* padding: 40px; */
  /* width: 100%; */
  max-width: 800px !important;
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #D49C0C;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
  border-radius: 20px;
  box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
</style>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Enregistrer";
  } else {
    document.getElementById("nextBtn").innerHTML = "Suivant";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    // document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
//   var i, x = document.getElementsByClassName("step");
//   for (i = 0; i < x.length; i++) {
//     x[i].className = x[i].className.replace(" active", "");
//   }
//   //... and adds the "active" class on the current step:
//   x[n].className += " active";
}
</script>

@endsection