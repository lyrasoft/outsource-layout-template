<script setup lang="ts">
const themeColors = [
  'primary',
  'secondary',
  'success',
  'danger',
  'warning',
  'info',
  'light',
  'dark',
];
</script>

<template>
  <div class="container py-5">
    <div class="title row">
      <div class="col-12">
        <h2>Button</h2>
      </div>
    </div>
    <div class="buttons row my-4">
      <div class="col-lg-8">
        <div class="bs-component mb-3">
          <template v-for="themeColor of themeColors">
            <button type="button" class="btn " :class="`btn-${themeColor}`">{{ themeColor }}</button>
          </template>
          <a href="#">
            Link
          </a>
        </div>
        <div class="bs-component mb-3">
          <template v-for="themeColor of themeColors">
            <button type="button" class="btn disabled" :class="`btn-${themeColor}`">{{ themeColor }}</button>
          </template>
          <a href="#" class="disabled">
            Link
          </a>
        </div>
        <div class="bs-component mb-3">
          <template v-for="themeColor of themeColors">
            <button type="button" class="btn " :class="`btn-outline-${themeColor}`">{{ themeColor }}</button>
          </template>
        </div>
        <div class="dropdown-split-button bs-component mb-3">
          <template v-for="themeColor of themeColors">
            <div class="btn-group">
              <button type="button" class="btn " :class="`btn-${themeColor}`">{{ themeColor }}</button>
              <button type="button" class="btn dropdown-toggle dropdown-toggle-split"
                :class="`btn-${themeColor}`"
                data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                <li><a class="dropdown-item" href="#">Dropdown link</a></li>
              </ul>
            </div>
          </template>
        </div>
        <div class="dropdown-single-button bs-component mb-3">
          <template v-for="themeColor of themeColors">
            <div class="btn-group">
              <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                :class="`btn-${themeColor}`"
                aria-expanded="false">
                {{ themeColor }}
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
              </ul>
            </div>
          </template>
        </div>
        <div class="bs-component">
          <button type="button" class="btn btn-primary btn-lg">Large button</button>
          <button type="button" class="btn btn-primary">Default button</button>
          <button type="button" class="btn btn-primary btn-sm">Small button</button>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="bs-component mb-3">
          <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
            <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
              <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
              <label class="btn btn-primary" for="btncheck1">Checkbox</label>

              <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
              <label class="btn btn-primary" for="btncheck2">Checkbox2</label>

              <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
              <label class="btn btn-primary" for="btncheck3">Checkbox3</label>
            </div>
          </div>
          <div class="bs-component mb-3">
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
              <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
              <label class="btn btn-primary" for="btnradio1">Radio 1</label>

              <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
              <label class="btn btn-primary" for="btnradio2">Radio 2</label>

              <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
              <label class="btn btn-primary" for="btnradio3">Radio 3</label>
            </div>
          </div>
          <div class="bs-component mb-3">
            <div class="btn-group" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-secondary">Left</button>
              <button type="button" class="btn btn-secondary">Middle</button>
              <button type="button" class="btn btn-secondary">Right</button>
            </div>
          </div>
          <div class="bs-component">
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group me-2" role="group" aria-label="First group">
                <button type="button" class="btn btn-secondary">1</button>
                <button type="button" class="btn btn-secondary">2</button>
                <button type="button" class="btn btn-secondary">3</button>
                <button type="button" class="btn btn-secondary">4</button>
              </div>
              <div class="btn-group me-2" role="group" aria-label="Second group">
                <button type="button" class="btn btn-secondary">5</button>
                <button type="button" class="btn btn-secondary">6</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--      navbar      -->
      <div class="title row">
        <div class="col-12">
          <h2>Navbar</h2>
        </div>
      </div>
      <div class="navbars row my-4">
        <div class="col-12 bs-component mb-3">
          <!-- Navbar primary -->
          <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-secondary" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
        </div>
        <div class="col-12 bs-component mb-3">
          <!-- Navbar dark -->
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-secondary" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
        </div>
        <div class="col-12 bs-component">
          <!-- Navbar light -->
          <nav class="navbar navbar-expand-lg navbar-light bg-light" data-bs-theme="light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-secondary" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <!--      typography      -->
      <div class="title row">
        <div class="col-12">
          <h2>Typography</h2>
        </div>
      </div>
      <div class="typographies row my-4">
        <div class="col-lg-4">
          <h1>h1. Bootstrap heading</h1>
          <h2>h2. Bootstrap heading</h2>
          <h3>h3. Bootstrap heading</h3>
          <h4>h4. Bootstrap heading</h4>
          <h5>h5. Bootstrap heading</h5>
          <h6>h6. Bootstrap heading</h6>
          <h3>
            Heading
            <small class="text-muted">with muted text</small>
          </h3>
          <p class="lead">
            This is a lead paragraph. It stands out from regular paragraphs.
          </p>
        </div>
        <div class="col-lg-4">
          <h2>Example body text</h2>
          <div class="bs-component">
            <p> Lorem ipsum dolor sit amet, <a
              href="#">content with link</a> elit. Nihil veritatis voluptas! Adipisci cum, incidunt nostrum quidem repellat sed velit. Architecto ipsum itaque reprehenderit! Aliquam aut culpa ipsam
            </p>
            <p><small>This line of text is meant to be treated as fine print.</small></p>
            <p>The following is <strong>rendered as bold text.</strong></p>
            <p>The following is <em>rendered as italic text.</em></p>
            <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <h2>text-color classes</h2>
          <div class="bs-component">
            <p class="text-muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
            <template v-for="themeColor of themeColors">
              <p class="" :class="`text-${themeColor}`">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
            </template>
          </div>
        </div>
      </div>
      <!--      Blockquotes      -->
      <div class="title row">
        <div class="col-12">
          <h2>Blockquotes</h2>
        </div>
      </div>
      <div class="blockquotes row my-4">
        <div class="col-lg-4 bs-component">
          <figure>
            <blockquote class="blockquote">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              Someone famous in <cite title="Source Title">Source Title</cite>
            </figcaption>
          </figure>
        </div>
        <div class="col-lg-4 bs-component">
          <figure class="text-center">
            <blockquote class="blockquote">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              Someone famous in <cite title="Source Title">Source Title</cite>
            </figcaption>
          </figure>
        </div>
        <div class="col-lg-4 bs-component">
          <figure class="text-end">
            <blockquote class="blockquote">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              Someone famous in <cite title="Source Title">Source Title</cite>
            </figcaption>
          </figure>
        </div>
      </div>
      <!--      Table      -->
      <div class="title row">
        <div class="col-12">
          <h2>Table</h2>
        </div>
      </div>
      <div class="table row my-4">
        <div class="bs-component">
          <table class="table table-hover">
            <thead>
            <tr>
              <th scope="col">Type</th>
              <th scope="col">Column heading</th>
              <th scope="col">Column heading</th>
              <th scope="col">Column heading</th>
            </tr>
            </thead>
            <tbody>
            <tr class="table-active">
              <th scope="row">Active</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <tr class="table-hover">
              <th scope="row">Default</th>
              <td>Column content</td>
              <td>Column content</td>
              <td>Column content</td>
            </tr>
            <template v-for="themeColor of themeColors">
              <tr class="" :class="`table-${themeColor}`">
                <th scope="row">{{ themeColor }}</th>
                <td>Column content</td>
                <td>Column content</td>
                <td>Column content</td>
              </tr>
            </template>
            </tbody>
          </table>
        </div>
      </div>
      <!--      forms      -->
      <div class="title row">
        <div class="col-12">
          <h2>Forms</h2>
        </div>
      </div>
      <div class="forms row my-4">
        <div class="col-lg-6 bs-component">
          <form>
            <fieldset>
              <legend>Legend</legend>
              <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <div class="d-flex gap-2">
                  <input type="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div>
                  <input type="password" class="form-control" id="inputPassword">
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleSelect">Example select</label>
                <select class="form-select" aria-label="Default select example" id="exampleSelect">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleMultiSelect">Example multiple select</label>
                <select class="form-select" multiple aria-label="multiple select example" id="exampleMultiSelect">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">File input</label>
                <input type="file" class="form-control" id="formFile" />
                <div id="fileHelp" class="form-text">This is some placeholder block-level help text for
                  the above input. It's a bit lighter and easily wraps to a new line.
                </div>
              </div>
              <div class="mb-3">
                <legend>Radio buttons</legend>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                    checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Default radio
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Second default radio
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3"
                    disabled>
                  <label class="form-check-label" for="exampleRadios3">
                    Disabled radio
                  </label>
                </div>
              </div>
              <div class="mb-3">
                <legend>Checkboxes</legend>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                  <label class="form-check-label" for="flexCheckChecked">
                    Checked checkbox
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled>
                  <label class="form-check-label" for="flexCheckChecked">
                    Disabled checkbox
                  </label>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
        <div class="col-lg-6 offset-lg-1 bs-component">
          <form>
            <fieldset>
              <div class="mb-3">
                <label for="disabledInput">Disabled input</label>
                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input"
                  aria-label="Disabled input example" disabled>
              </div>
              <div class="mb-3">
                <label for="">Readonly input</label>
                <input class="form-control" type="text" value="Disabled readonly input"
                  aria-label="Disabled input example" readonly>
              </div>
              <div class="mb-3">
                <label for="readonlyInput">Readonly input</label>
                <input class="form-control" id="readonlyInput" type="text" value="Readonly input"
                  aria-label="readonly input example" readonly>
              </div>
              <div class="mb-3">
                <form class="row g-3 needs-validation" novalidate>
                  <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Valid input</label>
                    <input type="text" class="form-control is-valid" id="validationCustom01" value="Correct value"
                      required>
                    <div class="valid-feedback">
                      Success you've done!
                    </div>
                  </div>
                </form>
              </div>
              <div class="mb-3">
                <form class="row g-3 needs-validation" novalidate>
                  <div class="col-md-12">
                    <label for="validationCustom03" class="form-label">Invalid input</label>
                    <input type="text" class="form-control is-invalid" id="validationCustom02" value="Wrong value"
                      required>
                    <div class="invalid-feedback">
                      Please provide a valid input.
                    </div>
                  </div>
                </form>
              </div>
              <div class="mb-3">
                <label for="inputLarge" class="form-label">Large input</label>
                <input type="email" class="form-control form-control-lg" id="inputLarge" placeholder="Large size">
              </div>
              <div class="mb-3">
                <label for="inputDefault" class="form-label">Default input</label>
                <input type="email" class="form-control" id="inputDefault" placeholder="Default size">
              </div>
              <div class="mb-3">
                <label for="inputSmall" class="form-label">Small input</label>
                <input type="email" class="form-control" id="inputSmall" placeholder="Small size">
              </div>
              <label for="inputAmount" class="form-label">Enter amount</label>
              <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" class="form-control" id="inputAmount" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
              </div>
              <fieldset>
                <legend>Custom forms</legend>
                <div class="mb-3">
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                    <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDisabled" disabled>
                    <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">1</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">2</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                    <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <label class="input-group-text" for="inputGroupFile01">Upload</label>
                  <input type="file" class="form-control" id="inputGroupFile2">
                </div>
                <div class="input-group mb-3">
                  <input type="file" class="form-control" id="inputGroupFile02">
                  <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
              </fieldset>
            </fieldset>
          </form>
        </div>
      </div>
      <!--      Navs      -->
      <div class="title row">
        <div class="col-12">
          <h2>Navs</h2>
        </div>
      </div>
      <div class="navs row my-4">
        <div class="col-lg-6 bs-component">
          <h2>Tabs</h2>
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist" style="margin-bottom: 15px">
              <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home
              </button>
              <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile
              </button>
              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                type="button" role="tab" aria-controls="nav-contact" aria-selected="false" disabled>Disabled
              </button>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                  aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
              </li>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
              tabindex="0">HOMERaw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"
              tabindex="0">PROFILEFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.
            </div>
          </div>

        </div>
        <div class="col-lg-6">
          <h2>Pills</h2>
          <div class="bs-component mb-4">
            <ul class="nav nav-pills">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                  aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
          </div>
          <div class="bs-component">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                  aria-expanded="false">Dropdown</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row my-4">
        <!-- Offcanvas -->
        <div class="col-6">
          <h2>Offcanvas</h2>

          <div class="bg-body-tertiary overflow-hidden card">
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel"
              style="position: static; height: 200px; visibility: visible; transform: translateY(0);">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.
              </div>
            </div>
          </div>
        </div>

        <!-- Placeholders -->
        <div class="col-lg-6">
          <h2>Placeholders</h2>

          <div class="bg-body-tertiary card ">
            <div class="card-body d-flex justify-content-around">
              <div class="card" style="width: 18rem">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                  xmlns="http://www.w3.org/2000/svg" role="img"
                  aria-label="Placeholder" preserveAspectRatio="xMidYMid slice"
                  focusable="false"><title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#868e96"></rect>
                </svg>

                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p
                    class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>

              <div class="card" aria-hidden="true" style="width: 18rem">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="180"
                  xmlns="http://www.w3.org/2000/svg" role="img"
                  aria-label="Placeholder" preserveAspectRatio="xMidYMid slice"
                  focusable="false"><title>Placeholder</title>
                  <rect width="100%" height="100%" fill="#868e96"></rect>
                </svg>

                <div class="card-body">
                  <h5 class="card-title placeholder-glow">
                    <span class="placeholder col-6"></span>
                  </h5>
                  <p class="card-text placeholder-glow">
                    <span class="placeholder col-7"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-4"></span>
                    <span class="placeholder col-6"></span>
                    <span class="placeholder col-8"></span>
                  </p>
                  <a class="btn btn-primary disabled placeholder col-6"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="navs row">
        <div class="col-lg-6">
          <h2>Breadcrumbs</h2>
          <!--      breadcrumb's each padding is 0 now      -->
          <div class="bs-component">
            <nav aria-label="breadcrumb" class="">
              <ol class="breadcrumb" style="">
                <li class="breadcrumb-item active" aria-current="page">Home</li>
              </ol>
            </nav>

            <nav aria-label="breadcrumb" class="">
              <ol class="breadcrumb" style="">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
              </ol>
            </nav>

            <nav aria-label="breadcrumb" class="">
              <ol class="breadcrumb" style="">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
              </ol>
            </nav>

            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
              <ol class="breadcrumb" style="">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="col-lg-6">
          <h2>Pagination</h2>
          <div class="bs-component">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item active" aria-current="page">
                <span class="page-link">1</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="bs-component">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item active" aria-current="page">
                <span class="page-link">1</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">22</a></li>
              <li class="page-item"><a class="page-link" href="#">33</a></li>
              <li class="page-item"><a class="page-link" href="#">444</a></li>
              <li class="page-item"><a class="page-link" href="#">555</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="bs-component">
            <ul class="pagination pagination-lg">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item active" aria-current="page">
                <span class="page-link">1</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="bs-component">
            <ul class="pagination pagination-sm">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item active" aria-current="page">
                <span class="page-link">1</span>
              </li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="bs-component">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!--      Indicators      -->
      <div class="big_title row">
        <div class="col-12">
          <h2>Indicator</h2>
        </div>
      </div>
      <!--      Alerts      -->
      <div class="title row">
        <div class="col-12">
          <h2>Alerts</h2>
        </div>
      </div>
      <div class="alerts row my-4">
        <template v-for="themeColor of themeColors">
          <div class="col-4 bs-component">
            <div class="alert " :class="`alert-${themeColor}`" role="alert">
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                style="float: right"></button>
              <div>Danger!! Change a few things up and <a href="#" class="alert-link">try submitting</a> again.</div>
            </div>
          </div>
        </template>
      </div>
      <!--      Badges      -->
      <div class="title row">
        <div class="col-12">
          <h2>Badges</h2>
        </div>
      </div>
      <div class="badges row" style="margin-bottom: 40px">
        <div class="col-lg-6 bs-component mb-4 mb-lg-0">
          <!--   in bootstrap v5.2 , <span class="badge text-bg-primary">Primary</span> is available   -->
          <template v-for="themeColor of themeColors">
            <span class="badge " :class="`text-bg-${themeColor}`">{{ themeColor }}</span>
          </template>
        </div>
        <div class="col-lg-6 bs-component">
          <button type="button" class="btn btn-primary">
            Notifications <span class="badge text-bg-secondary">4</span>
          </button>
        </div>
      </div>
      <div class="badges row">
        <div class="col-lg-6 bs-component mb-4 mb-lg-0">
          <template v-for="themeColor of themeColors">
            <span class="badge rounded-pill " :class="`text-bg-${themeColor}`">{{ themeColor }}</span>
          </template>
        </div>
        <div class="col-lg-6 bs-component mb-4 mb-lg-0">
          <button type="button" class="btn btn-primary position-relative">
            Inbox
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-danger">
                        99+
                        <span class="visually-hidden">unread messages</span>
                    </span>
          </button>
        </div>
      </div>
      <!--      Progress      -->
      <div class="title row">
        <div class="col-12">
          <h2>Progress</h2>
        </div>
      </div>
      <div class="basic_progress row">
        <h3>Basic</h3>
        <div class="col-12 bs-component">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>
        </div>
      </div>
      <div class="backgrounds_progress row">
        <h3>Contextual alternatives</h3>
        <div class="col-12 bs-component">
          <template v-for="themeColor of themeColors">
            <div class="progress mb-3">
              <div class="progress-bar " :class="`bg-${themeColor}`" role="progressbar" style="width: 25%"
                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </template>
        </div>
      </div>
      <div class="multiple_progress row">
        <h3>Multiple bars </h3>
        <div class="col-12 bs-component">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0"
              aria-valuemax="100"></div>
            <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30"
              aria-valuemin="0" aria-valuemax="100"></div>
            <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0"
              aria-valuemax="100"></div>
          </div>

        </div>
      </div>
      <div class="striped_progress row">
        <h3>Striped</h3>
        <div class="col-12 bs-component">
          <template v-for="themeColor of themeColors">
            <div class="progress mb-3">
              <div class="progress-bar progress-bar-striped " :class="`bg-${themeColor}`" role="progressbar"
                style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </template>
        </div>
      </div>
      <div class="animated_progress row">
        <h3>Animated</h3>
        <div class="col-12 bs-component">
          <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75"
              aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
          </div>
        </div>
      </div>
      <!--      List Groups      -->
      <div class="title row mt-5">
        <div class="col-12">
          <h2>List groups</h2>
        </div>
      </div>
      <div class="listGroups row">
        <div class="col-lg-4 bs-component mb-4 mb-lg-0">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Cras justo odio
              <span class="badge text-bg-primary rounded-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Dapibus ac facilisis in
              <span class="badge text-bg-primary rounded-pill">2</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Morbi leo risus
              <span class="badge text-bg-primary rounded-pill">1</span>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 bs-component mb-4 mb-lg-0">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
              The current link item
            </a>
            <a href="#" class="list-group-item list-group-item-action">A second link item</a>
            <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
          </div>
        </div>
        <div class="col-lg-4 bs-component mb-4 mb-lg-0">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
                <small>3 days ago</small>
              </div>
              <p class="mb-1">Some placeholder content in a paragraph.</p>
              <small>And some small print.</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
                <small class="text-muted">3 days ago</small>
              </div>
              <p class="mb-1">Some placeholder content in a paragraph.</p>
              <small class="text-muted">And some muted small print.</small>
            </a>
          </div>
        </div>
      </div>
      <!--      Cards      -->
      <div class="title row">
        <div class="col-12">
          <h2>Cards</h2>
        </div>
      </div>
      <div class="cards row">
        <div class="col-6 col-lg-4 bs-component">
          <template v-for="themeColor of themeColors">
            <div class="card text-bg-{{themeColor}} mb-3" style="max-width: 18rem;">
              <div class="card-header">Header</div>
              <div class="card-body">
                <h5 class="card-title">{{ themeColor }} card title</h5>
                <p
                  class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </template>
        </div>
        <div class="col-6 col-lg-4 bs-component">
          <template v-for="themeColor of themeColors">
            <div class="card border-{{themeColor}} mb-3" style="max-width: 18rem;">
              <div class="card-header">Header</div>
              <div class="card-body">
                <h5 class="card-title">{{ themeColor }} card title</h5>
                <p
                  class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </template>
        </div>
        <div class="col-6 col-lg-4 bs-component">
          <div class="card" style="width: 18rem;">
            <div class="card-header fs-3">Header</div>
            <img src="" class="card-img-top" alt="Image" style="background-color:gray;min-height: 200px;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p
                class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">An item</li>
              <li class="list-group-item">A second item</li>
              <li class="list-group-item">A third item</li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
            <div class="card-footer text-muted">
              2 days ago
            </div>
          </div>
          <div class="card mt-3" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p
                class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
        </div>
      </div>
      <!--      Dialogs      -->
      <div class="title row mt-5">
        <div class="col-12">
          <h2>Dialogs</h2>
        </div>
      </div>
      <div class="dialogs row justify-content-between">
        <div class="col-lg-6 bs-component mb-4 mb-lg-0">
          <h2>Modal</h2>
          <div class="modal d-block position-static" id="myModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h2>Popovers</h2>
          <div class="bs-component">
            <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover"
              data-bs-placement="left" data-bs-content="Left popover">
              Left
            </button>
            <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover"
              data-bs-placement="top" data-bs-content="Top popover">
              Top
            </button>
            <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover"
              data-bs-placement="bottom" data-bs-content="Bottom popover">
              Bottom
            </button>
            <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover"
              data-bs-placement="right" data-bs-content="Right popover">
              right
            </button>
          </div>
          <h2 class="mt-5">Tooltips</h2>
          <div class="bs-component">
            <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left"
              title="Tooltip on left">
              Left
            </button>
            <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top"
              title="Tooltip on top">
              Top
            </button>
            <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom"
              title="Tooltip on bottom">
              Bottom
            </button>
            <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right"
              title="Tooltip on right">
              Right
            </button>
          </div>
        </div>
      </div>
      <!--      Accordian      -->
      <div class="title row">
        <div class="col-12">
          <h2>Accordions</h2>
        </div>
      </div>
      <div class="accordions row">
        <div class="col-lg-4 bs-component mb-4 mb-lg-0">
          <h2>Basic Accordion</h2>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  Accordion Item #1
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                  <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Accordion Item #2
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                  <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Accordion Item #3
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                  <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 bs-component mb-4 mb-lg-0">
          <h2>Flush Accordion</h2>
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Accordion Item #1
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                  <code>.accordion-flush</code> class. This is the first item's accordion body.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Accordion Item #2
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                  <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Accordion Item #3
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                  <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 bs-component mb-4 mb-lg-0">
          <h2>Always open</h2>
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseOne">
                  Accordion Item #1
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                  <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                  aria-controls="panelsStayOpen-collapseTwo">
                  Accordion Item #2
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                  <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                  aria-controls="panelsStayOpen-collapseThree">
                  Accordion Item #3
                </button>
              </h2>
              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                  <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--      Spinners      -->
      <div class="title row mt-5">
        <div class="col-12">
          <h2>Spinners</h2>
        </div>
      </div>
      <div class="spinners row">
        <div class="col-6 col-lg-4 bs-component mb-4 mb-lg-0">
          <h2>Border spinner</h2>
          <template v-for="themeColor of themeColors">
            <div class="spinner-border " :class="`text-${themeColor}`" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
          </template>
        </div>
        <div class="col-6 col-lg-4 bs-component mb-4 mb-lg-0">
          <h2>Growing spinner</h2>
          <template v-for="themeColor of themeColors">
            <div class="spinner-grow " :class="`text-${themeColor}`" role="status">
              <span class="visually-hidden">Loading...</span>
            </div>
          </template>
        </div>
        <div class="col-6 col-lg-4 bs-component mb-4 mb-lg-0">
          <button class="btn btn-primary mb-2" type="button" disabled>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            <span class="visually-hidden">Loading...</span>
          </button>
          <button class="btn btn-primary mb-2" type="button" disabled>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            Loading...
          </button>
          <button class="btn btn-primary mb-2" type="button" disabled>
            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
            <span class="visually-hidden">Loading...</span>
          </button>
          <button class="btn btn-primary mb-2" type="button" disabled>
            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
            Loading...
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>
