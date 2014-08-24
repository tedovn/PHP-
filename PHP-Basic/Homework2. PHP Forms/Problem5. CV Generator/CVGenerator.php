<!DOCTYPE html>
<html>
<head>
    <title>CVGenerator</title>
    <meta charset="UTF-8">
    <meta lang="en">

</head>

<body>
<script>
    var pnextId = 1;

    function addInput() {
        pnextId++;
        var inputDiv1 = document.getElementById('pr-input1');
        var inputDiv2 = document.createElement('div');
        inputDiv2.setAttribute("id", "pr-input" + pnextId);
        inputDiv2.innerHTML = inputDiv1.innerHTML;
        document.getElementById('programmer').appendChild(inputDiv2);
    }
    function removeInput() {
        var inputDiv = document.getElementById('pr-input' + pnextId);
        if (pnextId > 1) {
            document.getElementById('programmer').removeChild(inputDiv);
            pnextId--;
        }
    }
    var lnextId = 1;

    function addInputLang() {
        lnextId++;
        var inputDiv1 = document.getElementById('ln-input1');
        var inputDiv2 = document.createElement('div');
        inputDiv2.setAttribute("id", "ln-input" + lnextId);
        inputDiv2.innerHTML = inputDiv1.innerHTML;
        document.getElementById('languages').appendChild(inputDiv2);
    }
    function removeLanguage() {
        var inputDiv = document.getElementById('ln-input' + lnextId);
        if (lnextId > 1) {
            document.getElementById('languages').removeChild(inputDiv);
            lnextId--;
        }
    }

</script>
<?php
require "includes.php";
?>
<form action="output.php" method="post">
    <fieldset>
        <legend>Personal Information</legend>
        <div><input type="text" name="firstName" placeholder="First Name"></div>
        <div><input type="text" name="lastName" placeholder="Last Name"></div>
        <div><input type="email" name="email" placeholder="Email"></div>
        <div><input type="text" name="phone" placeholder="Phone Number"></div>
        <div><label for="female">Female</label><input type="radio" name="gender" value="1" id="female">
            <label for="male">Male</label><input type="radio" name="gender" value="2" id="male"></div>
        <div>BirthDate</div>
        <input type="text" name="bdate" placeholder="dd/mm/yyyy">

        <div>Nationality</div>
        <div><select name="nationality">
                <?php
                foreach ($nationality as $key => $value) {
                    echo '<option value=' . $key . '>' . $value . '</option>';
                }
                ?>
            </select></div>
    </fieldset>
    <fieldset>
        <legend>Last work Position</legend>
        <div><label for="company">Company Name</label><input type="text" id="company" name="company"></div>
        <div>From<input type="text" name="work-from" placeholder="dd/mm/yyyy"></div>
        <div>To<input type="text" name="work-to" placeholder="dd/mm/yyyy"></div>
    </fieldset>
    <fieldset>
        <legend>Computer Skills</legend>
        <div>Programming Languages</div>
        <div id="programmer">
            <div id="pr-input1"><input type="text" name="comp-lang[]"><select name="comp-skill[]">
                    <?php foreach ($computerSkills as $key => $value) {
                        echo '<option value=' . $key . '>' . $value . '</option>';
                    }
                    ?>
                </select></div>
        </div>
        <div><input type="button"  value="Remove Language" id="btn-remove" onclick=" removeInput()"><input type="button"
                                                                                                          value="Add Language"
                                                                                                          id="btn-add"
                                                                                                          onclick="addInput()">
        </div>
    </fieldset>
    <fieldset
        <legend>Other Skills</legend>
        <div id="languages">Languages
            <div id="ln-input1">
                <input type="text" name="language[]"><select required="required" name="lang-comp[]">
                    <option selected disabled value="0" >-Comprehension-</option>
                    <?php foreach ($langgroup as $key => $value) {
                        echo '<option value=' . $key . '>' . $value . '</option>';
                    }
                    ?>
                </select>
                <select required="required" name="lang-read[]">
                    <option selected disabled value="0">-Reading-</option>
                    <?php foreach ($langgroup as $key => $value) {
                        echo '<option value=' . $key . '>' . $value . '</option>';
                    }
                    ?>
                </select>
                <select required="required" name="lang-writing[]">
                    <option selected disabled value="0">-Writing-</option>
                    <?php foreach ($langgroup as $key => $value) {
                        echo '<option value=' . $key . '>' . $value . '</option>';
                    }
                    ?>
                </select>

            </div>
        </div>
        <div><input type="button" onclick="removeLanguage()" value="Remove Language"><input type="button"
                                                                                            onclick="addInputLang()"
                                                                                            value="Add Language"></div>
        <div>Driver`s License</div>
        <div><label for="dlb">B</label><input type="checkbox" name="driver_license[]" id="dlb" value="1">
            <label for="dla">A</label><input type="checkbox" name="driver_license[]" id="dla" value="2">
            <label for="dlc">C</label><input type="checkbox" name="driver_license[]" id="dlc" value="3"></div>
    </fieldset>
    <input type="submit" value="Generate CV">
</form>

<?php


?>
</body>

</html>