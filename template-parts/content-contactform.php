<?php
/**
 * Template part for the contact form
 *
 *
 * @package Christian_Bell
 */

?>

<div class="contact-form">
<?php
	$validation_messages = [];
	$success_message = '';

	if ( isset( $_POST['contact_form'] ) ) {

		//Sanitize the data
		$full_name = isset( $_POST['full_name'] ) ? sanitize_text_field( $_POST['full_name'] ) : '';
		$email     = isset( $_POST['email'] ) ? sanitize_text_field( $_POST['email'] ) : '';
		$message   = isset( $_POST['message'] ) ? sanitize_textarea_field( $_POST['message'] ) : '';

		//Validate the data
		if ( strlen( $full_name ) === 0 ) {
			$validation_messages[] = esc_html__( 'Please enter a valid name.', 'christianbell' );
		}

		if ( strlen( $email ) === 0 or
		     ! is_email( $email ) ) {
			$validation_messages[] = esc_html__( 'Please enter a valid email address.', 'christianbell' );
		}

		if ( strlen( $message ) === 0 ) {
			$validation_messages[] = esc_html__( 'Please enter a valid message.', 'christianbell' );
		}

		//Send an email to the WordPress administrator if there are no validation errors
		if ( empty( $validation_messages ) ) {

			$mail    = get_option( 'admin_email' );
			$subject = 'CB enquiry: ' . $full_name;
			$message = $message . ' - The email address of the customer is: ' . $mail;

			wp_mail( $mail, $subject, $message );

			$success_message = esc_html__( 'Your message has been successfully sent.', 'christianbell' );

		}

	}

	//Display the validation errors
	if ( ! empty( $validation_messages ) ) {
		foreach ( $validation_messages as $validation_message ) {
			echo '<div class="validation-message">' . esc_html( $validation_message ) . '</div>';
		}
	}

	//Display the success message
	if ( strlen( $success_message ) > 0 ) {
		echo '<div class="success-message">' . esc_html( $success_message ) . '</div>';
	}

	?>

    <!-- Echo a container used that will be used for the JavaScript validation -->
    <div id="validation-messages-container"></div>

    <form id="contact-form" action="<?php echo esc_url( get_permalink() ); ?>"
          method="post">

        <input type="hidden" name="contact_form">

        <div class="form-section">
            <label for="full-name"><?php echo esc_html( 'Full Name', 'christianbell' ); ?></label>
            <input type="text" id="full-name" name="full_name">
        </div>

        <div class="form-section">
            <label for="email"><?php echo esc_html( 'Email', 'christianbell' ); ?></label>
            <input type="text" id="email" name="email">
        </div>

        <div class="form-section">
            <label for="message"><?php echo esc_html( 'Message', 'christianbell' ); ?></label>
            <textarea id="message" name="message"></textarea>
        </div>

        <input type="submit" id="contact-form-submit" value="<?php echo esc_attr( 'Submit', 'christianbell' ); ?>">

    </form>
    </div><!-- contact-form -->
<?php
