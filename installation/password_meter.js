function passwordStrength(password){
        var desc = new Array();
        desc[0] = "Très faible";
        desc[1] = "Faible";
        desc[2] = "Bon";
        desc[3] = "Assez fort";
        desc[4] = "Fort";
        desc[5] = "Très fort";
        var score   = 0;
        if (password.length > 6) score++;
        if ( ( password.match(/[a-z]/) ) ) score++;
        if (password.match(/\d+/)) score++;
        if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) ) score++;
        if (password.length > 12) score++;
         document.getElementById("passwordDescription").innerHTML = desc[score];
         document.getElementById("passwordStrength").className = "strength" + score;
}