$(function(){

	// a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
	//$( "#dialog:ui-dialog" ).dialog( "destroy" );
	
	function updateTips( tips, t ) {
		tips
			.text( t )
			.addClass( "ui-state-highlight" );
		setTimeout(function() {
			tips.removeClass( "ui-state-highlight", 1500 );
		}, 500 );
	}

	function checkLength( o, n, min, max, tips ) {
		if ( o.val().length > max || o.val().length < min ) {
			o.addClass( "ui-state-error" );
			updateTips( tips, "Length of " + n + " must be between " + min + " and " + max + "." );
			return false;
		} else {
			return true;
		}
	}
	function checkEqual( o1, o2, n , tips) {
		if ( o1.val() != o.val() ) {
			o.addClass( "ui-state-error" );
			updateTips(tips, n);
			return false;
		} else {
			return true;
		}
	}

	function checkEmpty( o, n, tips) {
		if ( o.val().length == 0 ) {
			o.addClass( "ui-state-error" );
			updateTips(tips, "You have to write some in " + n + "." );
			return false;
		} else {
			return true;
		}
	}

	function checkRegexp( o, regexp, n, tips ) {
		if ( !( regexp.test( o.val() ) ) ) {
			o.addClass( "ui-state-error" );
			updateTips( tips, n );
			return false;
		} else {
			return true;
		}
	}
	
	if ( $( "#dialog-form-thread" ).length == 1){
		var title = $( "#dialog-form-thread textarea#thread_title" ),
		comment = $( "#dialog-form-thread textarea#post_comment" ),
		allFields = $( [] ).add(title).add(comment),
		tips = $( ".validateTips" );
		
		$( "#dialog-form-thread" ).dialog({
			autoOpen: false,
			height: 450,
			width: 450,
			modal: true,
			buttons: {
				"Create an account": function() {
					var bValid = true;
					allFields.removeClass( "ui-state-error" , tips);
					bValid = bValid && checkEmpty( title, "title", tips);
					bValid = bValid && checkEmpty( comment, "comment", tips);

					if ( bValid ) {
						$("#dialog-form-thread input#user_submit").trigger('click');
					}
				},
				Cancel: function() {
					$( this ).dialog( "close" );
				}
			},
			close: function() {
				allFields.val( "" ).removeClass( "ui-state-error" );
			}
		});
	
		$( "#create-thread-post" )
			.button()
			.click(function() {
				$( "#dialog-form-thread" ).dialog( "open" );
			});

	}
	
	if ( $( "#dialog-form-login" ).length == 1){	
		var loginusername = $( "#dialog-form-login input#username" ),
		loginpassword = $( "#dialog-form-login input#password" ),
		loginAllFields = $( [] ).add(loginusername).add(loginpassword),
		logintips = $( ".dialog-form-login-validateTips" );
		$( "#dialog-form-login" ).dialog({
			autoOpen: false,
			height: 300,
			width: 250,
			modal: true,
			buttons: {
				"Login": function() {
					var bValid = true;
					loginAllFields.removeClass( "ui-state-error" );
					bValid = bValid && checkEmpty( loginusername, "username", logintips);
					bValid = bValid && checkEmpty( loginpassword, "password", logintips);

					if ( bValid ) {
						$("#dialog-form-login input#login_submit").trigger('click');
					}
				},
				Cancel: function() {
					$( this ).dialog( "close" );
				}
			},
			close: function() {
				loginAllFields.val( "" ).removeClass( "ui-state-error" );
			}
		});
		$( "#dialog-form-login-open" )
			.click(function() {
				$( "#dialog-form-login" ).dialog( "open" );
			});
	}
	
	if ( $( "#dialog-form-register" ).length == 1){
		
		var firstname = $( "#dialog-form-register input#firstname" );
		var lastname = $( "#dialog-form-register input#lastname" );
		var username = $( "#dialog-form-register input#username" );
		var password = $( "#dialog-form-register input#password" );
		var passconf = $( "#dialog-form-register input#passconf" );
		var email = $( "#dialog-form-register input#email" );
		var registerAllFields = $( [] ).add(firstname).add(lastname).add( username ).add( password ).add( email )
		var tips = $( ".dialog-form-register-validateTips" );
		
		$( "#dialog-form-register" ).dialog({
			autoOpen: false,
			height: 500,
			width: 400,
			modal: true,
			buttons: {
				"Register Your Acount": function() {
					var bValid = true;
					registerAllFields.removeClass( "ui-state-error" );
					bValid = bValid && checkLength( firstname, "firstname",2, 50, tips);
					bValid = bValid && checkLength( lastname, "lastname",2, 50, tips);
					bValid = bValid && checkLength( username, "username",3, 16, tips);
					bValid = bValid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9", tips );
					bValid = bValid && checkEqual( password, passconf, "password confirmation is failed!", tips);
					bValid = bValid && checkRegexp( email, /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i, "eg. ui@jquery.com", tips );
					if ( bValid ) {
						$("#dialog-form-register input#login_submit").trigger('click');
					}
				},
				Cancel: function() {
					$( this ).dialog( "close" );
				}
			},
			close: function() {
				registerAllFields.val( "" ).removeClass( "ui-state-error" );
			}
		});
		$( "#dialog-form-register-open" )
			.click(function() {
				$( "#dialog-form-register" ).dialog( "open" );
			});
	}

});
