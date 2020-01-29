<?php get_header(); ?>

<div class="section is-hero img1 is-subpage">
    <div class="container">
      <div class="col block-centered text-align-center lg-7 md-12">
        <h1>Error Codes</h1>
        <div class="padding-left padding-right subhead-header">
          An API needs to retrieve the correct HTTP codes for each request.
        </div>
      </div>
    </div>
</div>


<div class="section">
  <div class="container flex-horizontal">
    <div class="col lg-12 md-12">
      <div class="table100 ver1 m-b-110">
        <div class="table100-head">
          <table>
            <thead>
              <tr class="row100 head">
                <th class="cell100 column1" scope="col">Code</th>
                <th class="cell100 column2" scope="col">Message</th>
                <th class="cell100 column3" scope="col">Description</th>
              </tr>
            </thead>
          </table>
      </div>
      <div class="table100-body js-pscroll ps ps--active-y">
        <table>
          <tbody>
            <tr class="row100 body">
              <td class="cell100 column1">200</td>
              <td class="cell100 column2">OK</td>
              <td class="cell100 column3">Success.</td>
            </tr>
            <tr class="row100 body">
              <td class="cell100 column1">400</td>
              <td class="cell100 column2">Bad Request</td>
              <td class="cell100 column3">The request has parameter(s) invalid(s).</td>
            </tr>
            <tr class="row100 body">
              <td class="cell100 column1">401</td>
              <td class="cell100 column2">Unauthorized</td>
              <td class="cell100 column3">The access token was not informed or do not have access APIs.</td>
            </tr>
            <tr class="row100 body">
              <td class="cell100 column1">404</td>
              <td class="cell100 column2">Not Found</td>
              <td class="cell100 column3">The appeal stated in the request was not found.</td>
            </tr>
            <tr class="row100 body">
            <td   class="cell100 column1">413</td>
            <td class="cell100 column2">Request is to Large</td>
            <td class="cell100 column3">The request is exceeding the limit allowed for the profile of your access token.</td>
            </tr>
            <tr class="row100 body">
            <td   class="cell100 column1">422</td>
            <td class="cell100 column2">Unprocessable Entity</td>
            <td class="cell100 column3">The request has business mistakes.</td>
            </tr>
            <tr class="row100 body">
              <td class="cell100 column1">429</td>
              <td class="cell100 column2">Too Many Requests</td>
              <td class="cell100 column3">The consumer burst limit requests for time.</td>
            </tr>
            <tr class="row100 body">
              <td class="cell100 column1">500</td>
              <td class="cell100 column2">Internal Server Error</td>
              <td class="cell100 column3">Unexpected error, something is broken in the API.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>