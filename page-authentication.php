<?php get_header(); ?>

<div class="section is-hero img1 is-subpage">
    <div class="container">
      <div class="col block-centered text-align-center lg-7 md-12">
        <h1>Authentication</h1>
        <div class="padding-left padding-right subhead-header">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
      </div>
    </div>
</div>

<div class="section position-relative bg-steps">
    <div class="container">
        <div class="container position-relative md-margin-bottom">
            <div class="c-process__line hidden-md"></div>

            <div class="col lg-4 md-12">
                <div class="cp-bullet-number">
                    <p class="text-xlg text-primary">1</p>
                </div>
                <h3 class="text-align-center">Signup</h3>
                <div class="text-align-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non sapien maximus.
                </div>
            </div>

            <div class="col lg-4 md-12">
                <div class="cp-bullet-number">
                    <p class="text-xlg text-primary">2</p>
                </div>
                <h3 class="text-align-center">Create</h3>
                <div class="text-align-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non sapien maximus.
                </div>
            </div>

            <div class="col lg-4 md-12">
                <div class="cp-bullet-number">
                    <p class="text-xlg text-primary">3</p>
                </div>
                <h3 class="text-align-center">Publish</h3>
                <div class="text-align-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non sapien maximus.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section position-relative bg-steps">
    <div class="container">
        <div class="container position-relative md-margin-bottom">
            <div class="col lg-6 md-12">
                <div class="col text-align-left block-centered lg-8 md-12">
                    <h2>OAuth</h2>
                    <div class="low-text-contrast text-medium margin-bottom">
                        The API supports the OAuth 1.0a Protocol, accepting parameters via the Authorization header, with the HMAC-SHA1 signature method only. There's probably already an OAuth client libraryfor your platform.
                    </div>
                </div>
            </div>

            <div class="col lg-6 md-12">
                <div class="col text-align-left block-centered lg-8 md-12">
                    <h2>Endpoints</h2>
                        <div class="low-text-contrast margin-bottom">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Request-token URL</td>
                                        <td>http://www.tumblr.com/oauth/request_token</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td>Authorize URL</td>
                                        <td>http://www.tumblr.com/oauth/authorize</td>
                                    </tr>
                                    <tr class="row100 body">
                                        <td>Access-Token URL</td>
                                        <td>http://www.tumblr.com/oauth/access_token</td>
                                    </tr>
                                </tbody>
                            </table> 
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>