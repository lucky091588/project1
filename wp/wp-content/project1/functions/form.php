<?php
function contact_form_validation( $Validation, $data, $Data ) {
    $Validation->set_rule( 'form-full-name', 'noempty', array( 'message' => FULL_NAME_ERROR_EMPTY ) );
    $Validation->set_rule( 'form-phone-number', 'noempty', array( 'message' => PHONE_ERROR_EMPTY ) );
    $Validation->set_rule( 'form-phone-number', 'numeric', array( 'message' => PHONE_ERROR_NUMERIC ) );
    $Validation->set_rule( 'form-mail-address', 'noempty', array( 'message' => EMAIL_ERROR_EMPTY ) );
    $Validation->set_rule( 'form-inquiry-type', 'required', array( 'message' => INQUIRY_ERROR_EMPTY ) );
    $Validation->set_rule( 'form-mail-address', 'mail', array( 'message' => EMAIL_ERROR_MAIL ) );
    $Validation->set_rule( 'form-phone-number', 'between', array(
        'min' => 8,
        'max' => 15,
        'message' => PHONE_ERROR_BETWEEN
    ) );

    return $Validation;
}

add_filter( 'mwform_validation_' . FORM_SHORT_CODE, 'contact_form_validation', 10, 3 );


function brochure_form_validation( $Validation, $data, $Data ) {
    $Validation->set_rule( 'form-company-name', 'noempty', array( 'message' => COMPANY_ERROR_EMPTY ) );
    $Validation->set_rule( 'form-full-name', 'noempty', array( 'message' => FULL_NAME_ERROR_EMPTY ) );
    $Validation->set_rule( 'form-phone-number', 'noempty', array( 'message' => PHONE_ERROR_EMPTY ) );
    $Validation->set_rule( 'form-phone-number', 'numeric', array( 'message' => PHONE_ERROR_NUMERIC ) );
    $Validation->set_rule( 'form-mail-address', 'noempty', array( 'message' => EMAIL_ERROR_EMPTY ) );
    $Validation->set_rule( 'form-mail-address', 'mail', array( 'message' => EMAIL_ERROR_MAIL ) );
    $Validation->set_rule( 'form-phone-number', 'between', array(
        'min' => 8,
        'max' => 15,
        'message' => PHONE_ERROR_BETWEEN
    ) );

    return $Validation;
}

add_filter( 'mwform_validation_' . FORM_SHORT_CODE_DOWNLOAD_BROCHURE, 'brochure_form_validation', 10, 3 );

