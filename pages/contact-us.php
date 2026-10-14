<style>
    #banner {
        height: 100px;
        background-image: none;
        background: #f4f1e8;
    }

    #banner:before {
        display: none;
    }

    #banner h1.green {
        display: none;
    }
</style>

<?php
$sitekey = '6LchdFYrAAAAAJw8ffUCYgYFvPM8sUen8QhK_cgw';
$secretkey = '6LchdFYrAAAAAI5ch9pIegrACFO-amwErt5BkJse';

$sent = false;
$error = '';

if (isset($_POST['pgsubmitted'])) {

    $yourname = isset($_POST['yourname']) ? trim($_POST['yourname']) : '';
    $company = isset($_POST['company']) ? trim($_POST['company']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';

    if ($yourname === '' || $company === '' || $email === '' || $message === '') {

        $error = 'One or more required fields were left blank. Please fill them in and try again.';

    } elseif (empty($_POST['g-recaptcha-response'])) {

        $error = 'Recaptcha verification not working. Please try again.';

    } else {

        $api_url = 'https://www.google.com/recaptcha/api/siteverify';

        $resq_data = array(
            'secret' => $secretkey,
            'response' => $_POST['g-recaptcha-response'],
            'remoteip' => isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : ''
        );

        $curlConfig = array(
            CURLOPT_URL => $api_url,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => $resq_data
        );

        $ch = curl_init();
        curl_setopt_array($ch, $curlConfig);
        $response = curl_exec($ch);
        curl_close($ch);

        $responseData = json_decode($response);

        if ($responseData && $responseData->success) {

            $site_name = 'LENEXX';
            $to = 'tmyo1536@gmail.com';

            $headers = array(
                'MIME-Version: 1.0',
                'Content-type: text/html; charset=UTF-8',
                'From: info@lenexx.com.au'
            );

            $body = 'Hello, <br><br>
            You have received a message from the ' . $site_name . ' website. <br><br>
            Name: ' . htmlspecialchars($yourname, ENT_QUOTES) . '<br><br>
            Company: ' . htmlspecialchars($company, ENT_QUOTES) . '<br><br>
            Email: ' . htmlspecialchars($email, ENT_QUOTES) . '<br><br>
            Phone: ' . htmlspecialchars($phone, ENT_QUOTES) . '<br><br>
            Message: ' . nl2br(htmlspecialchars($message, ENT_QUOTES));

            mail($to, $site_name . ' Website Message', $body, implode("\r\n", $headers));

            $sent = true;
        } else {

            $error = 'Recaptcha verification not working. Please try again.';
        }
    }
}
?>

<section id="contact-us" class="cnt-section">
    <div class="container-fluid">
        <div class="row align-items-stretch">

            <!-- Contact details -->
            <div class="col-lg-5">
                <div class="cnt-intro">
                    <span class="sub-title" data-aos="fade-up">CONTACT US</span>
                    <h1 class="main-title cnt-title" data-aos="fade-up" data-aos-delay="100">
                        Let's make something<br>
                        <span class="text-blue-accent">remarkable.</span>
                    </h1>
                    <p class="cnt-lead" data-aos="fade-up" data-aos-delay="200">
                        Have a project or question? We'd love to hear from you.
                    </p>

                    <ul class="cnt-details">
                        <li data-aos="fade-up" data-aos-delay="300">
                            <span class="cnt-detail-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="2.5" y="4.5" width="19" height="15" rx="2.5" />
                                    <path d="M3.5 6.5l8.5 6 8.5-6" />
                                </svg>
                            </span>
                            <div class="cnt-detail-text">
                                <span class="cnt-detail-label">Email:</span>
                                <a href="mailto:info@lenexx.com.au">info@lenexx.com.au</a>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="400">
                            <span class="cnt-detail-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.5 3.5h-1A2.5 2.5 0 0 0 4 6v12a2.5 2.5 0 0 0 2.5 2.5h9A2.5 2.5 0 0 0 18 18v-1" />
                                    <path d="M14 3.5h2.5a2.5 2.5 0 0 1 2.5 2.5V8.5" />
                                    <path d="M15.5 13.5l2 2 3.5-4" />
                                </svg>
                            </span>
                            <div class="cnt-detail-text">
                                <span class="cnt-detail-label">Phone:</span>
                                <a href="tel:+61400123456">+61 400 123 456</a>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-delay="500">
                            <span class="cnt-detail-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21s7-6.2 7-11a7 7 0 1 0-14 0c0 4.8 7 11 7 11z" />
                                    <circle cx="12" cy="10" r="2.6" />
                                </svg>
                            </span>
                            <div class="cnt-detail-text">
                                <span class="cnt-detail-label">Address:</span>
                                <span>Melbourne, Australia</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Form -->
            <div class="col-lg-7">
                <div class="cnt-panel">

                    <?php if ($sent) { ?>
                        <div class="cnt-alert is-success">Thank you very much for contacting us.</div>
                    <?php } ?>

                    <?php if ($error !== '') { ?>
                        <div class="cnt-alert is-error"><?php echo htmlspecialchars($error, ENT_QUOTES); ?></div>
                    <?php } ?>

                    <form action="/contact-us/" method="post" id="contact-form" class="cnt-form">

                        <div class="cnt-row">
                            <div class="cnt-field">
                                <label class="cnt-label" for="yourname">Name <sup>*</sup></label>
                                <input class="cnt-input" type="text" id="yourname" name="yourname" required
                                    autocomplete="off">
                            </div>
                            <div class="cnt-field">
                                <label class="cnt-label" for="company">Company <sup>*</sup></label>
                                <input class="cnt-input" type="text" id="company" name="company" required
                                    autocomplete="off">
                            </div>
                        </div>

                        <div class="cnt-row">
                            <div class="cnt-field">
                                <label class="cnt-label" for="email">Email <sup>*</sup></label>
                                <input class="cnt-input" type="email" id="email" name="email" required
                                    autocomplete="off">
                            </div>
                            <div class="cnt-field">
                                <label class="cnt-label" for="phone">Phone</label>
                                <input class="cnt-input" type="text" id="phone" name="phone" autocomplete="off">
                            </div>
                        </div>

                        <div class="cnt-row">
                            <div class="cnt-field">
                                <label class="cnt-label" for="request">Message <sup>*</sup></label>
                                <textarea class="cnt-input cnt-textarea" rows="7" id="request" name="message"
                                    required></textarea>
                            </div>
                        </div>

                        <input type="hidden" name="pgsubmitted" value="pgsubmitted">

                        <button class="g-recaptcha cnt-submit" data-sitekey="<?php echo $sitekey; ?>"
                            data-callback="onSubmit" data-action="submit">Send</button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</section>