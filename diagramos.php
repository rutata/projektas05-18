<?php $bgurl="img/about-js.jpg";

include("header.php"); 

?>

<h1>Prisijunkite ir gaukite asmeninius kelionių pasiūlymus tiesiai į elektroninį paštą!</h1>

  <div class="row row-bg">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">Vardas</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Pavardė</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Prisijungiimo duomenys</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Slaptažodis</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">El. paštas</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          Kontaktinis El. paštas:
          <div class="input-field inline">
            <input id="email" type="email" class="validate">
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
      </div>
    </form>
  </div>
<a class="waves-effect waves-light btn submit">Submit</a>

<?php include("footer.php");
  ?>