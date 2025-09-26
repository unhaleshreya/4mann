
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
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        @php
                            $resourcestechmanual = Resources::where('document_type', 'technical-manual')->get();
                        @endphp
                        @if($resourcestechmanual->count() > 0)
                        @foreach($resourcestechmanual as $resource)
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('storage/' . $resource->document_path) }}')" class="image-anime" data-cursor-text="View">
                                @if($resource->image_path)
                                    <img src="{{ asset('storage/' . $resource->image_path) }}" alt="">
                                @else
                                    <img src="{{ asset('assets/images/resources/4.jpg') }}" alt="">
                                @endif
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('storage/' . $resource->document_path) }}')">{{ $resource->title }}</a></h2>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/4MANN - Technical Manual.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/4.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/4MANN - Technical Manual.pdf') }}')">4MANN - Technical Manual</a></h2>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="divider" id="BIS-Certificate">
                <div class="section-title">
                    <h2 class="text-anime-style-2">BIS <span> Certificate</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        @php
                            $resourcesbiscertificate = Resources::where('document_type', 'bis-certificate')->get();
                        @endphp
                        @if($resourcesbiscertificate->count() > 0)
                        @foreach($resourcesbiscertificate as $resource)
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('storage/' . $resource->document_path) }}')" class="image-anime" data-cursor-text="View">
                                @if($resource->image_path)
                                    <img src="{{ asset('storage/' . $resource->image_path) }}" alt="">
                                @else
                                    <img src="{{ asset('assets/images/resources/Certificate.jpg') }}" alt="">
                                @endif
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('storage/' . $resource->document_path) }}')">{{ $resource->title }}</a></h2>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/BIS Certificate/BIS License.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Certificate.jpg') }}" alt="">
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="divider" id="Catalogs">
                <div class="section-title">
                    <h2 class="text-anime-style-2"> <span> Catalogs</span></h2>
                </div>
                <div class="row">
                    @php
                        $resourcescatalogs = Resources::where('document_type', 'catalogs')->get();
                    @endphp
                    @if($resourcescatalogs->count() > 0)
                    @foreach($resourcescatalogs as $resource)
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Catalogs/4Mann Product Catalogue - 1.3.0 - E.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/5.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Catalogs/4Mann Product Catalogue - 1.3.0 - E.pdf') }}')">4Mann Product Catalogue - 1.3.0 - E</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Catalogs/4Mann Product Catalogue - 1.3.0 - E.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/5.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Catalogs/4Mann Product Catalogue - 1.3.0 - E.pdf') }}')">4Mann Product Catalogue - 1.3.0 - E</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Catalogs/Arrowbond Coil Catalogue - 2.2.4.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/6.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Catalogs/Arrowbond Coil Catalogue - 2.2.4.pdf') }}')">Arrowbond Coil Catalogue - 2.2.4</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="divider" id="Other-Resources">
                <div class="section-title">
                    <h2 class="text-anime-style-2">Other <span> Resources</span></h2>
                </div>
                <h3 class="mb-4">Approval Letters</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Approval Letters/BMC Approval Letter 11-09-2023.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Letter.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Approval Letters/BMC Approval Letter 11-09-2023.pdf') }}')">BMC Approval Letter 11-09-2023</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Approval Letters/BPCL Letter of Intent 10-05-2023.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Letter.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Approval Letters/BPCL Letter of Intent 10-05-2023.pdf') }}')">BPCL Letter of Intent 10-05-2023</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Approval Letters/CIDCO Enlistment - 27-09-2023.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Letter.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Approval Letters/CIDCO Enlistment - 27-09-2023.pdf') }}')">CIDCO Enlistment - 27-09-2023</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Approval Letters/CPWD Delhi Enlistment 06-06-2025.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Letter.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Approval Letters/CPWD Delhi Enlistment 06-06-2025.pdf') }}')">CPWD Delhi Enlistment 06-06-2025</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Approval Letters/CPWD Mumbai Enlistment 03-05-2024.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Letter.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Approval Letters/CPWD Mumbai Enlistment 03-05-2024.pdf') }}')">CPWD Mumbai Enlistment 03-05-2024</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Approval Letters/PWD Delhi Enlistment 23-07-2024.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Letter.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Approval Letters/PWD Delhi Enlistment 23-07-2024.pdf') }}')">PWD Delhi Enlistment 23-07-2024</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <h3 class="mb-4">Performance Certificates</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Performance Certificates/CBM Industries Performance Certificate.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Certificate.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Performance Certificates/CBM Industries Performance Certificate.pdf') }}')">CBM Industries Performance Certificate</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Performance Certificates/CIDCO Performance Certificate 17-07-2023.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Certificate.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Performance Certificates/CIDCO Performance Certificate 17-07-2023.pdf') }}')">CIDCO Performance Certificate 17-07-2023</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Performance Certificates/Design Dialogue Performance Certificate.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Certificate.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Performance Certificates/Design Dialogue Performance Certificate.pdf') }}')">Design Dialogue Performance Certificate</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Performance Certificates/Pinaki Project.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Certificate.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Performance Certificates/Pinaki Project.pdf') }}')">Pinaki Project</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Performance Certificates/Snehanjali Electronics Performance CErtificate 05-03-2024.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Certificate.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Other Resources/Performance Certificates/Snehanjali Electronics Performance CErtificate 05-03-2024.pdf') }}')">Snehanjali Electronics Performance CErtificate 05-03-2024</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="divider" id="Other-Test-Reports">
                <div class="section-title">
                    <h2 class="text-anime-style-2">Other <span> Test Reports</span></h2>
                </div>
                <h3 class="mb-4">Warrington Fire Test Report</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/OTHER TEST REPORTS/Warrington Fire Test Report/Bodycote - FR_BS 476 Class 0 Summary - 2009.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Report.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/OTHER TEST REPORTS/Warrington Fire Test Report/Bodycote - FR_BS 476 Class 0 Summary - 2009.pdf') }}')">Bodycote - FR_BS 476 Class 0 Summary - 2009</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/OTHER TEST REPORTS/Warrington Fire Test Report/Bodycote - FR_BS 476 Pt 6 - 2009.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Report.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/OTHER TEST REPORTS/Warrington Fire Test Report/Bodycote - FR_BS 476 Pt 6 - 2009.pdf') }}')">Bodycote - FR_BS 476 Pt 6 - 2009</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/OTHER TEST REPORTS/Warrington Fire Test Report/Bodycote - FR_BS 476 Pt 7 - 2009.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Report.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/OTHER TEST REPORTS/Warrington Fire Test Report/Bodycote - FR_BS 476 Pt 7 - 2009.pdf') }}')">Bodycote - FR_BS 476 Pt 7 - 2009</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="mb-4">ARAI Test Report</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/OTHER TEST REPORTS/ARAI Test Report/ARAI - FR-Hor. Bur. - TR - 36616A.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Report.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/ARAI Test Report/Warrington Fire Test Report/ARAI - FR-Hor. Bur. - TR - 36616A.pdf') }}')">ARAI - FR-Hor. Bur. - TR - 36616A</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/OTHER TEST REPORTS/ARAI Test Report/ARAI - FR-Ver. Bur. + Melt. Beh. - TR - 36616B.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Report.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/ARAI Test Report/Warrington Fire Test Report/ARAI - FR-Ver. Bur. + Melt. Beh. - TR - 36616B.pdf') }}')">ARAI - FR-Ver. Bur. + Melt. Beh. - TR - 36616B</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="mb-4">Sound Absorbing Test Certificates</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/OTHER TEST REPORTS/Sound Absorbing Test Certificates/CSIR - Sound Absorbing Test - 4FR-B1 - Jun-25.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Certificate.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Sound Absorbing Test Certificates/Warrington Fire Test Report/CSIR - Sound Absorbing Test - 4FR-B1 - Jun-25.pdf') }}')">CSIR - Sound Absorbing Test - 4FR-B1 - Jun-25</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/OTHER TEST REPORTS/Sound Absorbing Test Certificates/CSIR - Sound Transmision Test - 4FR-B1 - Jun-25.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Certificate.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Sound Absorbing Test Certificates/Warrington Fire Test Report/CSIR - Sound Transmision Test - 4FR-B1 - Jun-25.pdf') }}')">CSIR - Sound Transmision Test - 4FR-B1 - Jun-25</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="mb-4">IIT Test Certificate</h3>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/OTHER TEST REPORTS/IIT Test Certificate/IIT - 4Mann - ACP - 4F-4P-3R - 2024.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Certificate.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/IIT Test Certificate/Warrington Fire Test Report/IIT - 4Mann - ACP - 4F-4P-3R - 2024.pdf') }}')">IIT - 4Mann - ACP - 4F-4P-3R - 2024</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="divider" id="IGBC-Certificate">
                <div class="section-title">
                    <h2 class="text-anime-style-2">IGBC <span> Certificate</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/IGBC certificate/India Green Building Council Certificate.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Certificate.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/IGBC certificate/India Green Building Council Certificate.pdf') }}')">India Green Building Council Certificate</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider" id="Fire-Test-Certificate">
                <div class="section-title">
                    <h2 class="text-anime-style-2">Fire Test <span> Certificate</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Fire Test Certificate/ATMY - FR-B1 - ASTM E-119 - 2025.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Certificate.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Fire Test Certificate/ATMY - FR-B1 - ASTM E-119 - 2025.pdf') }}')">ATMY - FR-B1 - ASTM E-119 - 2025</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Fire Test Certificate/ATMY - FR-B1 - EN 13501-1 - 2025.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Certificate.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Fire Test Certificate/ATMY - FR-B1 - EN 13501-1 - 2025.pdf') }}')">ATMY - FR-B1 - EN 13501-1 - 2025</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Fire Test Certificate/ATMY - FR-B1 - NFPA-285 - 2025.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Certificate.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/Fire Test Certificate/ATMY - FR-B1 - NFPA-285 - 2025.pdf') }}')">ATMY - FR-B1 - NFPA-285 - 2025</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider" id="ISO-Certificates">
                <div class="section-title">
                    <h2 class="text-anime-style-2">ISO <span> Certificates</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/ISO certificates/4IPL - ISO 9001-2015 - upto 12.07.2027.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Certificate.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/ISO certificates/4IPL - ISO 9001-2015 - upto 12.07.2027.pdf') }}')">4IPL - ISO 9001-2015 - upto 12.07.2027</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/ISO certificates/ce.1 4IPL - ISO 14001-2015 - upto 23.04.2026.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Certificate.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/ISO certificates/ce.1 4IPL - ISO 14001-2015 - upto 23.04.2026.pdf') }}')">ce.1 4IPL - ISO 14001-2015 - upto 23.04.2026</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/ISO certificates/ce.2 4IPL - ISO 45001-2018 - upto 23.04.2026.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Certificate.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/ISO certificates/ce.2 4IPL - ISO 45001-2018 - upto 23.04.2026.pdf') }}')">ce.2 4IPL - ISO 45001-2018 - upto 23.04.2026</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider" id="TDS">
                <div class="section-title">
                    <h2 class="text-anime-style-2"> <span> TDS</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/TDS/6RHP - Technical data Sheet.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Report.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/TDS/6RHP - Technical data Sheet.pdf') }}')">6RHP - Technical data Sheet</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/TDS/3R  FR B1 - Technical data Sheet.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Report.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/TDS/3R  FR B1 - Technical data Sheet.pdf') }}')">3R FR B1 - Technical data Sheet</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/TDS/3R - Technical data Sheet 1.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Report.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/TDS/3R - Technical data Sheet 1.pdf') }}')">3R - Technical data Sheet 1</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/TDS/3R - Technical data Sheet.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Report.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/TDS/3R - Technical data Sheet.pdf') }}')">3R - Technical data Sheet</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/TDS/4F - Technical data Sheet.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Report.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/TDS/4F - Technical data Sheet.pdf') }}')">4F - Technical data Sheet</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/TDS/4F FR B1- Technical data Sheet.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Report.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/TDS/4F FR B1- Technical data Sheet.pdf') }}')">4F FR B1- Technical data Sheet</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/TDS/4P - Technical data Sheet.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Report.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/TDS/4P - Technical data Sheet.pdf') }}')">4P - Technical data Sheet</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/TDS/4P FR B1 - Technical data Sheet.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Report.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/TDS/4P FR B1 - Technical data Sheet.pdf') }}')">4P FR B1 - Technical data Sheet</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="post-item wow fadeInUp">
                            <a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/TDS/6FHP - Technical data Sheet.pdf') }}')" class="image-anime" data-cursor-text="View">
                                <img src="{{ asset('assets/images/resources/Report.jpg') }}" alt="">
                            </a>

                            <div class="post-item-body">
                                <div class="post-item-content mt-3">
                                    <h2><a href="javascript:void(0)" onclick="openPDF('{{ asset('assets/images/resources/TDS/6FHP - Technical data Sheet.pdf') }}')">6FHP - Technical data Sheet</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
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

