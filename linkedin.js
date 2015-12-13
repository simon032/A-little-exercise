  // Setup an event listener to make an API call once auth is complete
	var llog =0;
    function onLinkedInLoad() {
        IN.Event.on(IN, "auth", getProfileData);
    }

    // Handle the successful return from the API call
    function onSuccess(data) {
        //console.log(data);
		llog =1;	
		member = data.values[0];
		document.getElementById("fn").value=member.firstName;
		document.getElementById("ln").value=member.lastName;
		document.getElementById("em").value=member.emailAddress;
		
    }

    // Handle an error response from the API call
    function onError(error) {
        console.log(error);
    }

    // Use the API call wrapper to request the member's basic profile data
    function getProfileData() {
        IN.API.Profile("me").fields([
            "firstName","lastName","headline","positions:(company,title,summary,startDate,endDate,isCurrent)","industry",
            "location:(name,country:(code))","pictureUrl","publicProfileUrl","emailAddress",
            "educations","dateOfBirth"]).result(function(result) { onSuccess(result);})
			.error(function(err) {
      			alert(err);
    		});
    }
	
	function ln_logout(){
		if(llog ==1)
  			IN.User.logout();
			flog =0;
	}
	