<?php

/**
 * @Author: Gian
 * @Date:   2018-07-03 19:15:49
 * @Last Modified by:   Gian
 * @Last Modified time: 2018-09-24 14:01:32
 */
?>
<style>
	.dataTables_length{
		display:none;
	}
	#acre-logos{
		height:200px;
	}
	#acre-logos div {
		padding:10px;
		display: inline-block;
	}

	.upload-btn-wrapper {
	  position: relative;
	  overflow: hidden;
	  display: inline-block;
	}

	.btn-upload {
	  border: none;
	  color: #FFF;
	  background-color: #4c96ae;
	  padding: 6px;
	  margin-right:10px;
	}

	.upload-btn-wrapper input[type=file] {
	  font-size: 100px;
	  position: absolute;
	  left: 0;
	  top: 0;
	  opacity: 0;
	}
</style>
<script>
	
	$(function(){
		var src = [{"value":"enabled","text":"enabled"},{"value":"disabled","text":"disabled"}]
		var options = {
						url:"<?= base_url() ?>index.php/admin/about_us/about/change_position",
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
			url:"<?= base_url() ?>index.php/admin/about_us/about/change_enable",
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
	        "ajax": "<?= base_url('index.php/admin/about_us/about/auto_load_slide') ?>",
	        fnDrawCallback: function(){
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

         var optionHistory = {
                              beforeSubmit: function(){
                                $('.btn-history').attr("disabled","disabled")
                                $('.btn-history').html("Saving..")
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
                                  $(".btn-history").removeAttr("disabled");
                                  $(".btn-history").html("Save");
                                }
                              },
                              dataType:"JSON"

         }
         $('#form-text-history').ajaxForm(optionHistory);

         var optionHymn = {
                              beforeSubmit: function(){
                                $('.btn-hymn').attr("disabled","disabled")
                                $('.btn-hymn').html("Saving..")
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
                                  $(".btn-hymn").removeAttr("disabled");
                                  $(".btn-hymn").html("Save");
                                }
                              },
                              dataType:"JSON"

         }
         $('#form-text-hymn').ajaxForm(optionHymn);

         var optionMission = {
                              beforeSubmit: function(){
                                $('.btn-mission').attr("disabled","disabled")
                                $('.btn-mission').html("Saving..")
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
                                  $(".btn-mission").removeAttr("disabled");
                                  $(".btn-mission").html("Save");
                                }
                              },
                              dataType:"JSON"

         }
         $('#form-text-mission').ajaxForm(optionMission);
         var optionVision = {
                              beforeSubmit: function(){
                                $('.btn-vision').attr("disabled","disabled")
                                $('.btn-vision').html("Saving..")
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
                                  $(".btn-vision").removeAttr("disabled");
                                  $(".btn-vision").html("Save");
                                }
                              },
                              dataType:"JSON"

         }
         $('#form-text-vision').ajaxForm(optionVision);
         var optionCore = {
                              beforeSubmit: function(){
                                $('.btn-core').attr("disabled","disabled")
                                $('.btn-core').html("Saving..")
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
                                  $(".btn-core").removeAttr("disabled");
                                  $(".btn-core").html("Save");
                                }
                              },
                              dataType:"JSON"

         }
         $('#form-text-core').ajaxForm(optionCore);

        var optionLocation = {
                              beforeSubmit: function(){
                                $('.btn-location').attr("disabled","disabled")
                                $('.btn-location').html("Saving..")
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
                                  $(".btn-location").removeAttr("disabled");
                                  $(".btn-location").html("Save");
                                }
                              },
                              dataType:"JSON"

         }
        $('#form-text-sc-location').ajaxForm(optionLocation);
       	$('.responsive').slick({
		  dots: true,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 8,
		  slidesToScroll: 4,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
		});


		var optionAccre = {
                              beforeSubmit: function(){
                                $('.btn-accre').attr("disabled","disabled")
                                $('.btn-accre').html("Saving..")
                              },
                              success:function(data){
                                console.log(data);
                                // if(data.success == "success"){
                                  // setTimeout(function() {
                                  //         toastr.options = {
                                  //             closeButton: true,
                                  //             progressBar: true,
                                  //             showMethod: 'slideDown',
                                  //             timeOut: 4000
                                  //         };
                                  //         toastr.success(data.successMsg);
                                  //     });
                                  $(".btn-accre").removeAttr("disabled");
                                  $(".btn-accre").html("Save");
                                // }
                              },
                              // dataType:"JSON"

         }
         $('#form-text-accre').ajaxForm(optionAccre);


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
        $(document).on('click','.btn-trash-pic',function(e){
          $.ajax({
            url: '<?= base_url()?>index.php/admin/about_us/about/delete_image_carousel',
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