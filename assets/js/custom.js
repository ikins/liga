//global variable
var base_url = $("#url").val();

$( "#submit_check_domain" ).click(function() {
  
	var nama_domain = $('#nama_domain').val();
	var tld = $('#tld').val();

	$.ajax({
                type: "POST",
                dataType: "html",
                url: base_url+'post-domain',
                data: {nama_domain:nama_domain, tld:tld},
                beforeSend: function() {
                    $('#info_domain').html('<div style="margin: 120px 380px;"><img src="'+base_url+'/assets/images/loading.gif"/></div>');//show loading animation here
                },
                success: function(msg){
                    $('#info_domain').html(msg);                   
                }
    });

});