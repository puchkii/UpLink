
<!--De settings inputs er moeten ook fout meldingen komen zo als oud wachtwoord klopt niet wachtwoorden matchen niet
    username is all ingebruik job title niet ingevult-->

<!--De style moet hier van nog gedaan worden als het kan hou de namen er in of ongeveer het zelfde maakt nog niet veel uit
    omdat de functioneel gedeelte nog niet gemaakt is-->

<div class="container-fluid">
  Change password<br>
  <form class="" method="post">
    <input type="password" name="oudwachtwoord" class="rounded" value=""><br>
    <input type="password" name="password1" class="rounded" value=""><br>
    <input type="password" name="password2" class="rounded" value=""><br>
    <input type="submit" name="ChangePassword" value="Change" class="btn btn-outline-secondary">
  </form>

  Me<br>
  <form class="" method="post">
    <input type="text" name="username" class="rounded" value=""><br>
    <textarea name="aboutme" rows="8" class="rounded" cols="80"><?php echo $aboutDB; ?></textarea>
    <input type="submit" name="Submit" value="Change" class="btn btn-outline-secondary">
  </form>

  Jobs<br>
  <form class="" method="post">
    <input type="text" name="jobTitle" class="rounded" value=""><br>
    <textarea name="jobInfo" rows="8" class="rounded" cols="80"></textarea>
    <input type="submit" name="AddJob" value="Add" class="btn btn-outline-secondary">
  </form>
</div>
<!--Een lijst van job titles die je kan veranderen en verweideren moet hier nog komen-->
