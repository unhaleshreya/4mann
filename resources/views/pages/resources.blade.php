@extends('main-layout.app')
@extends('main-layout.app')
@section('content')
<!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            <div class="divider" id="technical-manual">
                <div class="section-title">
                    <h2 class="text-anime-style-2">4MANN - <span> Technical Manual</span></h2>
                </div>

                <div class="row">
                    @php
                            $resourcestechmanual = $resources->where('document_type', 'technical-manual');
                        @endphp
                        @if($resourcestechmanual->count() > 0)
                        @foreach($resourcestechmanual as $resource)
                    <div class="col-lg-4 col-md-6">

                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')" class="image-anime" data-cursor-text="View">
                                @if($resource->image_path)
                                    <img src="{{ asset($resource->image_path) }}" alt="">

                                @endif
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')">{{ $resource->title }}</a></h2>
                                </div>
                            </div>
                        </div>
                        {{-- @endforeach
                        @endif --}}
                    </div>
                       @endforeach
                        @endif
                </div>

            </div>

            <div class="divider" id="BIS-Certificate">
                <div class="section-title">
                    <h2 class="text-anime-style-2">BIS <span> Certificate</span></h2>
                </div>
                <div class="row">
                     @php
                            $resourcesbiscertificate = $resources->where('document_type', 'bis-certificate');
                        @endphp
                        @if($resourcesbiscertificate->count() > 0)
                        @foreach($resourcesbiscertificate as $resource)
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->

                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')" class="image-anime" data-cursor-text="View">
                                @if($resource->image_path)
                                    <img src="{{ asset($resource->image_path) }}" alt="">
                                @else
                                    <img src="{{ asset('assets/images/resources/Certificate.jpg') }}" alt="">
                                @endif
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')" class="image-anime" data-cursor-text="View">
                                @if($resource->image_path)
                                    <img src="{{ asset($resource->image_path) }}" alt="">
                                @else
                                    <img src="{{ asset('assets/images/resources/Certificate.jpg') }}" alt="">
                                @endif
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')">{{ $resource->title }}</a></h2>
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')">{{ $resource->title }}</a></h2>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach

                        @endif
                </div>
            </div>
            <div class="divider" id="Catalogs">
                <div class="section-title">
                    <h2 class="text-anime-style-2"> <span> Catalogs</span></h2>
                </div>
                <div class="row">
                    @php
                        $resourcescatalogs = $resources->where('document_type', 'catalogs');
                    @endphp
                    @if($resourcescatalogs->count() > 0)
                    @foreach($resourcescatalogs as $resource)
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')" class="image-anime" data-cursor-text="View">
                                @if($resource->image_path)
                                    <img src="{{ asset($resource->image_path) }}" alt="">

                                @endif
                           </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                        <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')">{{ $resource->title }}</a></h2>
                                    </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @endif
                </div>
            </div>
            <div class="divider" id="Other-Resources">
                <div class="section-title">
                    <h2 class="text-anime-style-2">Other <span> Resources</span></h2>
                </div>
                <h3 class="mb-4">Approval Letters</h3>
                <div class="row">
                    @php
                        $resourcesapprovalletters = $resources->where('document_type', 'approval-letters');
                    @endphp
                    @if($resourcesapprovalletters->count() > 0)
                    @foreach($resourcesapprovalletters as $resource)
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')" class="image-anime" data-cursor-text="View">
                                @if($resource->image_path)
                                    <img src="{{ asset($resource->image_path) }}" alt="">

                                @endif
                                {{-- <img src="{{ asset('assets/images/resources/Letter.jpg') }}" alt=""> --}}
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')">{{ $resource->title }}</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @endif
                </div>
                <h3 class="mb-4">Performance Certificates</h3>
                <div class="row">
                    @php
                        $resourcesperformancecertificates = $resources->where('document_type', 'performance-certificates');
                    @endphp
                    @if($resourcesperformancecertificates->count() > 0)
                    @foreach($resourcesperformancecertificates as $resource)
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')" class="image-anime" data-cursor-text="View">
                                @if($resource->image_path)
                                    <img src="{{ asset($resource->image_path) }}" alt="">

                                @endif
                                {{-- <img src="{{ asset('assets/images/resources/Letter.jpg') }}" alt=""> --}}
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')">{{ $resource->title }}</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                  @endif
                </div>
            </div>
            <div class="divider" id="Other-Test-Reports">
                <div class="section-title">
                    <h2 class="text-anime-style-2">Other <span> Test Reports</span></h2>
                </div>
                <h3 class="mb-4">Warrington Fire Test Report</h3>
                <div class="row">
                    @php
                        $resourceswarringtonfiretestreport = $resources->where('document_type', 'warrington-fire-test-report');
                    @endphp
                    @if($resourceswarringtonfiretestreport->count() > 0)
                    @foreach($resourceswarringtonfiretestreport as $resource)
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')" class="image-anime" data-cursor-text="View">
                                @if($resource->image_path)
                                    <img src="{{ asset($resource->image_path) }}" alt="">

                                @endif
                                {{-- <img src="{{ asset('assets/images/resources/Letter.jpg') }}" alt=""> --}}
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')">{{ $resource->title }}</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @endif
                </div>
                <h3 class="mb-4">ARAI Test Report</h3>
                <div class="row">
                    @php
                        $resourcesarai = $resources->where('document_type', 'arai-test-report');
                    @endphp
                    @if($resourcesarai->count() > 0)
                    @foreach($resourcesarai as $resource)
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')" class="image-anime" data-cursor-text="View">
                                @if($resource->image_path)
                                    <img src="{{ asset($resource->image_path) }}" alt="">

                                @endif
                                {{-- <img src="{{ asset('assets/images/resources/Letter.jpg') }}" alt=""> --}}
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')">{{ $resource->title }}</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @endif
                </div>
                <h3 class="mb-4">Sound Absorbing Test Certificates</h3>
                <div class="row">
                    @php
                         $resouucesSoundAbsorbingTestCertificates = $resources->where('document_type', 'sound-absorbing-test-certificates');
                    @endphp
                    @if($resouucesSoundAbsorbingTestCertificates->count() > 0)
                    @foreach($resouucesSoundAbsorbingTestCertificates as $resource)
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')" class="image-anime" data-cursor-text="View">
                                @if($resource->image_path)
                                    <img src="{{ asset($resource->image_path) }}" alt="">

                                @endif
                                {{-- <img src="{{ asset('assets/images/resources/Letter.jpg') }}" alt=""> --}}
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')">{{ $resource->title }}</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else

                    @endif
                </div>
                <h3 class="mb-4">IIT Test Certificate</h3>
                <div class="row">
                    @php
                        $resourcesIITTestCertificate = $resources->where('document_type', 'iit-test-certificate');
                    @endphp
                    @if($resourcesIITTestCertificate->count() > 0)
                    @foreach($resourcesIITTestCertificate as $resource)
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')" class="image-anime" data-cursor-text="View">
                                @if($resource->image_path)
                                    <img src="{{ asset($resource->image_path) }}" alt="">

                                @endif
                                {{-- <img src="{{ asset('assets/images/resources/Letter.jpg') }}" alt=""> --}}
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')">{{ $resource->title }}</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @endif
                </div>
            </div>
            <div class="divider" id="IGBC-Certificate">
                <div class="section-title">
                    <h2 class="text-anime-style-2">IGBC <span> Certificate</span></h2>
                </div>
                <div class="row">
                    @php
                        $resourcesIGBCcertificate = $resources->where('document_type', 'igbc-certificate');
                    @endphp
                    @if($resourcesIGBCcertificate->count() > 0)
                    @foreach($resourcesIGBCcertificate as $resource)
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')" class="image-anime" data-cursor-text="View">
                                @if($resource->image_path)
                                    <img src="{{ asset($resource->image_path) }}" alt="">

                                @endif
                                {{-- <img src="{{ asset('assets/images/resources/Letter.jpg') }}" alt=""> --}}
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')">{{ $resource->title }}</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @endif
                </div>
            </div>
            <div class="divider" id="Fire-Test-Certificate">
                <div class="section-title">
                    <h2 class="text-anime-style-2">Fire Test <span> Certificate</span></h2>
                </div>
                <div class="row">
                    @php
                    $resourcesfireTestCertificate = $resources->where('document_type', 'fire-test-certificate');
                    @endphp
                    @if($resourcesfireTestCertificate->count() > 0)
                    @foreach($resourcesfireTestCertificate as $resource)
 <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset($resource->image_path) }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Fire Test Certificate/ATMY - FR-B1 - ASTM E-119 - 2025.pdf') }}')">ATMY - FR-B1 - ASTM E-119 - 2025</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    @endif
                </div>
            </div>
            <div class="divider" id="ISO-Certificates">
                <div class="section-title">
                    <h2 class="text-anime-style-2">ISO <span> Certificates</span></h2>
                </div>
                <div class="row">
                    @php
                    $resourcesISOcertificates = $resources->where('document_type', 'iso-certificates');
                    @endphp
                    @if($resourcesISOcertificates->count() > 0)
                    @foreach($resourcesISOcertificates as $resource)
   <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset($resource->image_path) }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/ISO certificates/4IPL - ISO 9001-2015 - upto 12.07.2027.pdf') }}')">4IPL - ISO 9001-2015 - upto 12.07.2027</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @endif
                </div>
            </div>
            <div class="divider" id="TDS">
                <div class="section-title">
                    <h2 class="text-anime-style-2"> <span> TDS</span></h2>
                </div>
                <div class="row">
                    @php
                    $resourcesTDS = $resources->where('document_type', 'tds');
                    @endphp
                    @if($resourcesTDS->count() > 0)
                    @foreach($resourcesTDS as $resource)
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')" class="image-anime" data-cursor-text="View">
                                @if($resource->image_path)
                                    <img src="{{ asset($resource->image_path) }}" alt="">

                                @endif
                                {{-- <img src="{{ asset('assets/images/resources/Letter.jpg') }}" alt=""> --}}
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset($resource->document_path) }}')">{{ $resource->title }}</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Page Blog End -->


    <!-- Modal -->
    <div class="modal fade" id="pdfModal" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body p-0">
                    <iframe id="pdfIframe" src="" width="100%" height="100%" style="border: none; min-height: 90vh;"></iframe>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openPDF(pdfPath) {
            const isIOS = /iPad|iPhone|iPod/.test(navigator.userAgent);
            if (isIOS) {
                window.open(pdfPath, '_blank');
            } else {
                // Set dynamic PDF source
                document.getElementById('pdfIframe').src = pdfPath + '#toolbar=1';

                // Show modal
                const myModal = new bootstrap.Modal(document.getElementById('pdfModal'));
                myModal.show();
            }
        }
    </script>
    @endsection

