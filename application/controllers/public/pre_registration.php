<?php

/**
 * @Author: Gian
 * @Date:   2019-04-29 09:06:51
 * @Last Modified by:   Jose Dy
 * @Last Modified time: 3:21 PM 5/15/2020
 */
/**
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Pre_Registration extends CI_Controller{

	public function index(){
		$this->load->view('public/pre_registration');
	}

	public function register()
	{
		$this->load->library('upload');
		$this->load->model('pre_reg');
		$this->load->model('file_uploads');
		$this->load->model('admission_req_upload');
		$reg = new Pre_Reg;
		echo "<pre>";
		$currentSY = '2020-2021 1st';

        // $sch->db->where("MONTHNAME(sch_act.date) = MONTHNAME(NOW())");
        // $sch->db->order_by("sch_act.date","asc");
        // $sch->db->limit(10);
        // $getSch = $sch->get();

    	$reg->db->where(['first_name'=> $this->input->post('first_name'),'middle_name'=> $this->input->post('middle_name'),'last_name'=> $this->input->post('last_name'),'school_year_sem'=>$currentSY]);
    	$sameUser = sizeof( $reg->get() );
		// var_dump( $reg->search(['first_name'=> $this->input->post('first_name'),'middle_name'=> $this->input->post('middle_name'),'last_name'=> $this->input->post('last_name'),]) );

		// var_dump( $this->input->post() );
		
		// var_dump( $reg );

		echo "</pre>";
		if( $sameUser <= 0 ){
			$reg->type = $this->input->post('type');
			$reg->status = $this->input->post('status');
			$reg->school_year_sem = '2020-2021 1st';
			$reg->course = $this->input->post('course');
			$reg->first_name = $this->input->post('first_name');
			$reg->middle_name = $this->input->post('middle_name');
			$reg->last_name = $this->input->post('last_name');
			$reg->suffix = $this->input->post('suffix');
			$reg->date_of_birth = $this->input->post('date_of_birth');
			$reg->gender = $this->input->post('gender');
			$reg->marital_status = $this->input->post('marital_status');
			$reg->last_school_attended = $this->input->post('last_school_attended');
			$reg->last_school_attended_year = $this->input->post('last_school_attended_year');
			$reg->street_purok = $this->input->post('street_purok');
			$reg->barangay = $this->input->post('barangay');
			$reg->municipality = $this->input->post('municipality');
			$reg->city = $this->input->post('city');
			$reg->province = $this->input->post('province');
			$reg->postalcode = $this->input->post('postalcode');
			$reg->phone = $this->input->post('phone');
			$reg->email = $this->input->post('email');
			$reg->juniorhighcard = $this->input->post('juniorhighcard');
			$reg->gmc = $this->input->post('gmc');
			$reg->ncae = $this->input->post('ncae');
			$reg->birthcert = $this->input->post('birthcert');
			$reg->seniorhighcard = $this->input->post('seniorhighcard');
			$reg->tor = $this->input->post('tor');
			$reg->honorable_dismissal = $this->input->post('honorable_dismissal');
			$reg->brown_enve = $this->input->post('brown_enve');
			$reg->verification = 'Pending';
			$reg->date_created = date("Y-m-d H:i:s");;
		    $reg->save();

			$fileloc = $this->upload_payment($reg->si_id,'pay_attach');
			// echo "==============".$fileloc."==============";
		    if($fileloc != 'error'){
				$fileup = new File_Uploads;
		    	$fileup->file_location = $fileloc;
		    	$fileup->si_id = $reg->si_id;
				$fileup->save();
		    }

		    $files = $_FILES;
		    $filesName='admission_req';
		    $cpt = count($_FILES[$filesName]['name']);

		    for($i=0; $i<$cpt; $i++)
		    {
		        $_FILES['tempFile']['name']= $files[$filesName]['name'][$i];
		        $_FILES['tempFile']['type']= $files[$filesName]['type'][$i];
		        $_FILES['tempFile']['tmp_name']= $files[$filesName]['tmp_name'][$i];
		        $_FILES['tempFile']['error']= $files[$filesName]['error'][$i];
		        $_FILES['tempFile']['size']= $files[$filesName]['size'][$i];    
		        $newName = $reg->si_id.'-'.$i;
			    $fileLoc2 = $this->upload_admission_requirement($newName,'tempFile');
			    // echo "--------------".$fileLoc2."-----------";
			    if($fileLoc2 != 'error'){
					$fileup = new Admission_Req_Upload;
			    	$fileup->file_location = $fileLoc2;
			    	$fileup->si_id = $reg->si_id;
					$fileup->save();
			    }
		    }
		    // $this->for_verification();

	     	redirect('/public/pre_registration/for_verification', 'refresh');
    	}else{
     		redirect('/public/pre_registration/already_registered', 'refresh');

    	}
	}

    public function upload_payment($name, $fileName='userfile'){
		$path = 'file_uploads/payment_attachments/';
		$config['upload_path'] = $path;
		$config['file_name'] = $name;
		$config['allowed_types'] = 'gif|png|jpg|';
		$config['file_ext_tolower'] = true;
		$this->upload->initialize($config);
		if(!$this->upload->do_upload($fileName)){
			// echo $this->upload->display_errors();
			return "error";
		}else{
			// var_dump($this->upload->data());
			// echo $this->upload->data('orig_name');
			return $path.$this->upload->data('orig_name');
		}
    }

    public function upload_admission_requirement($name, $fileName='userfile'){
		$path = 'file_uploads/admission_requirements/';
		$config['upload_path'] = $path;
		$config['file_name'] = $name;
		$config['allowed_types'] = 'gif|png|jpg|';
		$config['file_ext_tolower'] = true;
		$this->upload->initialize($config);
		// $this->load->library('upload',$config);
		if(!$this->upload->do_upload($fileName)){
			// echo $this->upload->display_errors();
			return "error";
		}else{
			// var_dump($this->upload->data());
			// echo $this->upload->data('orig_name');
			return $path.$this->upload->data('orig_name');
		}
    }
    public function for_verification(){
		$this->load->view('public/pre_registration_verification');
    }
    
}