<!-- Edit Password Modal -->
<div class="modal fade" id="editPassModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title text-white text-uppercase fs-4" id="exampleModalLabel">Edit Password</h1>
                <button type="button" class="btn text-white bg-danger p-2" data-bs-dismiss="modal"
                        aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <title>e-remove</title>
                        <g fill="currentColor">
                            <path fill="currentColor"
                                  d="M19.7,4.3c-0.4-0.4-1-0.4-1.4,0L12,10.6L5.7,4.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4l6.3,6.3l-6.3,6.3 c-0.4,0.4-0.4,1,0,1.4C4.5,19.9,4.7,20,5,20s0.5-0.1,0.7-0.3l6.3-6.3l6.3,6.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L13.4,12l6.3-6.3C20.1,5.3,20.1,4.7,19.7,4.3z">
                            </path>
                        </g>
                    </svg>
                </button>
            </div>
            <form action="">
                <div class="modal-body p-3 p-lg-5">
                    <label class="mb-1 mb-lg-2 text-white">New Password</label>
                    <input class="success w-100 mb-3 mb-lg-4" type="password" placeholder="Enter New Password"
                           required>
                    <label class="mb-1 mb-lg-2 text-white">Repeat New Password</label>
                    <input class="success w-100 mb-2 mb-lg-2" type="password" placeholder="Re-enter New Password"
                           required>
                    <div class="error-notice w-100 m-0 mt-2">Passwords do not match.</div>
                    <hr class="my-3 my-lg-4">
                    <label class="mb-1 mb-lg-2 text-white">Current Password</label>
                    <input class="success w-100" type="password" placeholder="Enter Current Password" required>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn_text btn_danger px-4" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn_text btn_primary px-4">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
