<!-- Submenu for screen size xs - md -->
<div class="row d-inline d-sm-inline d-md-inline d-lg-none d-xl-none">
    <div class="col-12 text-end">
        <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#careerSubmenu" aria-expanded="false" aria-controls="careerSubmenu">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</div>

<div class="collapse d-lg-block d-xl-block sub-container-box mb-4" id="careerSubmenu">
    <div class="row">
        <div class="col-12">
            <h5>Categories</h5>
        </div>
        <div class="col-12">
            <form>
                <ul class="list-unstyled">
                    <li>
                        <button type="submit" class="btn btn-light w-100 text-start mb-1
                            @if ($query == null)
                                active
                            @endif
                        " value="" name="query">All</button>
                    </li>
                    <li>
                        <button type="submit" class="btn btn-light w-100 text-start mb-1
                            @if ($query == "IT")
                                active
                            @endif
                        " value="IT" name="query">IT</button>
                    </li>
                    <li>
                        <button type="submit" class="btn btn-light w-100 text-start mb-1
                            @if ($query == "Engineering")
                                active
                            @endif
                        " value="Engineering" name="query">Engineering</button>
                    </li>
                    <li>
                        <button type="submit" class="btn btn-light w-100 text-start mb-1
                            @if ($query == "Accounting")
                                active
                            @endif
                        " value="Accounting" name="query">Accounting</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>

<!-- Submenu for screen size lg - xl -->
{{-- <div class="sub-container-box pb-0 pt-3 d-none d-sm-none d-md-none d-lg-block d-xl-block">
    <div class="row d-none d-sm-none d-md-none d-lg-flex d-xl-flex">
        <div class="col-md-12">
            <h5>Submenu</h5>
        </div>
        <div class="col-md-11 offset-1">
            <form>
                <ul class="list-unstyled">
                    <li>
                        <button type="submit" class="btn btn-light w-100 text-start mb-1" value="" name="query">Images</button>
                    </li>
                    <li>
                        <button type="submit" class="btn btn-light w-100 text-start mb-1" value="IT" name="query">Text</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>

    <div class="row d-none d-sm-none d-md-none d-lg-flex d-xl-flex">
        <div class="col-md-12">
            <h5>Categories</h5>
        </div>
        <div class="col-md-11 offset-1">
            <form>
                <ul class="list-unstyled">
                    <li>
                        <button type="submit" class="btn btn-light w-100 text-start mb-1" value="" name="query">All</button>
                    </li>
                    <li>
                        <button type="submit" class="btn btn-light w-100 text-start mb-1" value="IT" name="query">IT</button>
                    </li>
                    <li>
                        <button type="submit" class="btn btn-light w-100 text-start mb-1" value="Engineering" name="query">Engineering</button>
                    </li>
                    <li>
                        <button type="submit" class="btn btn-light w-100 text-start mb-1" value="Accounting" name="query">Accounting</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>

</div> --}}
