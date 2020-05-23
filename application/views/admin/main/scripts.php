<?php

/**
 * @Author: Gian
 * @Date:   2018-07-08 10:16:42
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-09-28 09:33:03
 */
?>
<style>
	.dataTables_length{
		display:none;
	}
</style>
<script type="text/javascript">
	$(function(){
		var src = [{"value":"enabled","text":"enabled"},{"value":"disabled","text":"disabled"}]
		var options = {
						url:"<?= base_url() ?>index.php/admin/main/main_page/change_position",
						          mode:"inline",
						          ajaxOptions: {dataType:"json"},
						          success: function(r,nval){
						          			if (!r.success) {
						          				return r.view;
						          			};
						                        },
						          send: "always",
			
		}
		var option2 = {
			url:"<?= base_url() ?>index.php/admin/main/main_page/change_enable",
						          mode:"inline",
						          source:src,
						          ajaxOptions: {dataType:"json"},
						          success: function(r,nval){
						          			if (!r.success) {
						          				return r.view;
						          			};
						                        },
						          send: "always",
		}
		$('.select2').editable(option2)
		$('.editable').editable(options)
		var tbl = $('#tbl-show-image-slide').DataTable({
	        "info":     false,
	        "filter": false,
	        "pageLength": 5,
	        "ajax": "<?= base_url('index.php/admin/main/main_page/auto_load_slide') ?>",
	        fnDrawCallback: function(data){
            	$('.editable').editable(options);
            	$('.select2').editable(option2);
            }
		});
		var owl = $('.owl-carousel');
      	owl.owlCarousel({
        	margin: 0,
        	loop: true,
        	responsive: {
			    0: {
			      items: 1
			    },
			}
      	})
      	$(".main-carousel .left-nav").click(function(){
        	let prev = document.getElementsByClassName("owl-prev")[0];
        	prev.click();
        });
         $(".main-carousel .right-nav").click(function(){
        	let next = document.getElementsByClassName("owl-next")[0];
        	next.click();
        });
        Dropzone.options.myAwesomeDropzone = {

            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 100,
            maxFiles: 100,

            // Dropzone settings
            init: function() {
                var myDropzone = this;

                this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on("sendingmultiple", function() {

                });

                this.on("successmultiple", function(files, response) {
                	// console.log(response)
                	if(response == "success"){
                		setTimeout(function() {
			                toastr.options = {
			                    closeButton: true,
			                    progressBar: true,
			                    showMethod: 'slideDown',
			                    timeOut: 2000
			                };
			                toastr.success('Upload success...');
			            });
                        tbl.ajax.reload();
                	}
                });

                this.on("complete",function(file){
                    myDropzone.removeFile(file);
                    // console.log(file)
                });

                this.on("errormultiple", function(files, response) {

                });
            }
        }
        var optionAbout = {
                              beforeSubmit: function(){
                                $('.btn-about').attr("disabled","disabled")
                                $('.btn-about').html("Saving..")
                              },
                              success:function(data){
                                // console.log(data);
                                if(data.success == "success"){
                                  setTimeout(function() {
                                          toastr.options = {
                                              closeButton: true,
                                              progressBar: true,
                                              showMethod: 'slideDown',
                                              timeOut: 4000
                                          };
                                          toastr.success(data.successMsg);
                                      });
                                  	setTimeout(function() {
		            					window.location.reload()
			           				},2000);
                                  $(".btn-about").removeAttr("disabled");
                                  $(".btn-about").html("Save");
                                }
                              },
                              dataType:"JSON"

        }
        $('#form-text-about').ajaxForm(optionAbout); 

        $(document).on('click','.btn-trash-pic',function(e){
          $.ajax({
            url: '<?= base_url()?>index.php/admin/main/main_page/delete_image',
            type: 'POST',
            data: {id: $(this).attr('attr')},
          })
          .done(function(data) {
            if(data == "success"){
              setTimeout(function() {
                  toastr.options = {
                      closeButton: true,
                      progressBar: true,
                      showMethod: 'slideDown',
                      timeOut: 4000
                  };
                  toastr.success("successfully deleted.");
              });
              tbl.ajax.reload()
            }
          })
          
          e.preventDefault();
        })
	})


</script>