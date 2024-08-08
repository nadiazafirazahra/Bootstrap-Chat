@extends('layout.app')

@section('title', 'Home')

@section('content')

<link rel="stylesheet" href="style.css">

<div class="container-fluid home pt-5 pb-5">
    <div class="container text-center">
        <h2 class="display-8" id="home">Home</h2>
    </div>

    <div class="container-fluid home pt-5 pb-5">
        <div class="card text-center">
            <div class="card-body">
                <h2 class="display-7">Welcome to ChatBot</h2>
                <h3 class="display-7">PT Aisin Indonesia Automotive</h3>
                <h4 class="card-title">Can I help you?</h4>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Department</option>
                    @foreach(['Production', 'Engineering', 'Quality Assurance', 'Production Planning and Inventory Control', 'Production System & Development', 'Information Technology Development', 'Training & Management System'] as $department)
                        <option value="{{ $loop->index + 1 }}">{{ 'Department ' . $department }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <main class="content">
        <div class="container p-0">
            <div class="card">
                <div class="row g-0">
                </div>
                  <div class="col-12 col-lg-7 col-xl-9">
                    <div class="py-2 px-4 border-bottom d-none d-lg-block">
                      <div class="d-flex align-items-center py-1">
                        <div class="position-relative">
                          <img src="https://www.disnakerja.com/wp-content/uploads/2022/01/PT-Aisin-Indonesia-Logo.jpg"

                          class="rounded-circle mr-1"
                          alt=""
                          width="60"
                          height="60">
                        </div>
                        <div class="flex-grow-1 pl-3">
                        <div class="container text-start">
                          <strong>Department Production</strong>
                          <div class="text-muted small"></div>
                        </div>
                        <div>
                      </div>
                    </div>
                  </div>
                </div>


                    <div class="position-relative">
                      <div class="chat-messages p-4">

                        <div class="chat-message-right pb-4">
                          <div>
                            <div class="container text-center">
                            </div>
                            <div class="fw-bold mb-1">Department Production
                          </div>
                          <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                            Selamat datang di Departemen Produksi, ada yang bisa kami bantu?
                          </div>
                          <div class="text-end mt-2">09:05 am</div>
                      </div>


                        <div class="chat-message-left pb-4">
                          <div>
                            <div class="fw-bold mb-1">You</div>
                          </div>
                          <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                            Berapa barang produksi hari ini?
                          </div>
                          <div class="text-end mt-2">09:07 am</div>
                        </div>


                    <div class="flex-grow-0 py-3 px-4 border-top">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Type your message">
                        <div class="d-grid gap-2">
                            <button type="send" class="btn btn-info">Send</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </main>


          <main class="content">
            <div class="container p-0">
          <div class="card">
            <div class="row g-0">
            </div>
              <div class="col-12 col-lg-7 col-xl-9">
                <div class="py-2 px-4 border-bottom d-none d-lg-block">
                  <div class="d-flex align-items-center py-1">
                    <div class="position-relative">
                      <img src="https://www.disnakerja.com/wp-content/uploads/2022/01/PT-Aisin-Indonesia-Logo.jpg"
                      class="rounded-circle mr-1"
                      alt=""
                      width="60"
                      height="60"
                      >
                    </div>
                    <div class="flex-grow-1 pl-3">
                    <div class="container text-start">
                      <strong>Department Engineering</strong>
                      <div class="text-muted small"></div>
                    </div>
                    <div>
                  </div>
                </div>
              </div>
            </div>


                <div class="position-relative">
                  <div class="chat-messages p-4">

                    <div class="chat-message-right pb-4">
                      <div>
                        <div class="container text-center">
                        </div>
                        <div class="fw-bold mb-1">Department Engineering
                      </div>
                      <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                        Selamat datang di Departemen Engineering, ada yang bisa kami bantu?
                      </div>
                      <div class="text-end mt-2">08:16 am</div>
                  </div>


                    <div class="chat-message-left pb-4">
                      <div>
                        <div class="fw-bold mb-1">You</div>
                      </div>
                      <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                        Proyek apa yang sedang dikerjakan di departemen engineering?
                      </div>
                      <div class="text-end mt-2">08:17 am</div>
                    </div>


                <div class="flex-grow-0 py-3 px-4 border-top">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type your message">
                    <div class="d-grid gap-2">
                        <button type="send" class="btn btn-info">Send</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </div>
    </main>
</div>
@endsection
