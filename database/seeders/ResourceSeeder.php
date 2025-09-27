<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resources;

class ResourceSeeder extends Seeder
{
    public function run(): void
    {
  $resources = [
    [
        'title' => '4MANN - Technical Manual',
        'image_path' => 'assets/images/resources/4.jpg',
        'document_path' => 'assets/images/resources/4MANN - Technical Manual.pdf',
        'document_type' => '4MANN - Technical Manual'
    ],
    [
        'title' => 'BIS Certificate',
        'image_path' => 'assets/images/resources/Certificate.jpg',
        'document_path' => 'assets/images/resources/BIS Certificate/BIS Certificate.pdf',
        'document_type' => 'BIS Certificate'
    ],
     [
        'title' => '4Mann Product Catalogue - 1.3.0 - E',
        'image_path' => 'assets/images/resources/4Mann Product Catalogue - 1.3.0 - E.jpg',
        'document_path' => 'assets/images/resources/4Mann Product Catalogue - 1.3.0 - E.pdf',
        'document_type' => 'Catalogs'
    ],
    [
        'title' => 'Arrowbond Coil Catalogue - 2.2.4',
        'image_path' => 'assets/images/resources/6.jpg',
        'document_path' => 'assets/images/resources/Catalogs/Arrowbond Coil Catalogue - 2.2.4.pdf',
        'document_type' => 'Catalogs'
    ],
    [
        'title' => 'BMC Approval Letter 11-09-2023',
        'image_path' => 'assets/images/resources/Letter.jpg',
        'document_path' => 'assets/images/resources/Other Resources/Approval Letters/BMC Approval Letter 11-09-2023.pdf',
        'document_type' => 'Approval Letters'
    ],
    [
        'title' => 'BPCL Letter of Intent 10-05-2023',
        'image_path' => 'assets/images/resources/Letter.jpg',
        'document_path' => 'assets/images/resources/Other Resources/Approval Letters/BPCL Letter of Intent 10-05-2023.pdf',
        'document_type' => 'Approval Letters'
    ],
     [
        'title' => 'CIDCO Enlistment - 27-09-2023',
        'image_path' => 'assets/images/resources/Letter.jpg',
        'document_path' => 'assets/images/resources/Other Resources/Approval Letters/CIDCO Enlistment - 27-09-2023.pdf',
        'document_type' => 'Approval Letters'
    ],
     [
        'title' => 'CPWD Delhi Enlistment 06-06-2025',
        'image_path' => 'assets/images/resources/Letter.jpg',
        'document_path' => 'assets/images/resources/Other Resources/Approval Letters/CPWD Delhi Enlistment 06-06-2025.pdf',
        'document_type' => 'Approval Letters'
    ],
     [
        'title' => 'CPWD Mumbai Enlistment 03-05-2024',
        'image_path' => 'assets/images/resources/Letter.jpg',
        'document_path' => 'assets/images/resources/Other Resources/Approval Letters/CPWD Mumbai Enlistment 03-05-2024.pdf',
        'document_type' => 'Approval Letters'
    ],
    [
        'title' => 'PWD Delhi Enlistment 23-07-2024',
        'image_path' => 'assets/images/resources/Letter.jpg',
        'document_path' => 'assets/images/resources/Other Resources/Approval Letters/PWD Delhi Enlistment 23-07-2024.pdf',
        'document_type' => 'Approval Letters'
    ],
     [
        'title' => 'CBM Industries Performance Certificate',
        'image_path' => 'assets/images/resources/Certificate.jpg',
        'document_path' => 'assets/images/resources/Other Resources/Performance Certificates/CBM Industries Performance Certificate.pdf',
        'document_type' => 'Performance Certificate'
    ],
      [
        'title' => 'CIDCO Performance Certificate 17-07-2023',
        'image_path' => 'assets/images/resources/Certificate.jpg',
        'document_path' => 'assets/images/resources/Other Resources/Performance Certificates/CIDCO Performance Certificate 17-07-2023.pdf',
        'document_type' => 'Performance Certificate'
    ],
      [
        'title' => 'Design Dialogue Performance Certificate',
        'image_path' => 'assets/images/resources/Certificate.jpg',
        'document_path' => 'assets/images/resources/Other Resources/Performance Certificates/Design Dialogue Performance Certificate.pdf',
        'document_type' => 'Performance Certificate'
    ],
      [
        'title' => 'Pinaki Project',
        'image_path' => 'assets/images/resources/Certificate.jpg',
        'document_path' => 'assets/images/resources/Other Resources/Performance Certificates/Pinaki Project.pdf',
        'document_type' => 'Performance Certificate'
    ],
         [
        'title' => 'Snehanjali Electronics Performance CErtificate 05-03-2024',
        'image_path' => 'assets/images/resources/Certificate.jpg',
        'document_path' => 'assets/images/resources/Other Resources/Performance Certificates/Snehanjali Electronics Performance CErtificate 05-03-2024.pdf',
        'document_type' => 'Performance Certificate'
    ],
       [
        'title' => 'Bodycote - FR_BS 476 Class 0 Summary - 2009',
        'image_path' => 'assets/images/resources/Report.jpg',
        'document_path' => 'assets/images/resources/OTHER TEST REPORTS/Warrington Fire Test Report/Bodycote - FR_BS 476 Class 0 Summary - 2009.pdf',
        'document_type' => 'Warrington Fire Test Report'
    ],
     [
        'title' => 'Bodycote - FR_BS 476 Pt 6 - 2009',
        'image_path' => 'assets/images/resources/Report.jpg',
        'document_path' => 'assets/images/resources/OTHER TEST REPORTS/Warrington Fire Test Report/Bodycote - FR_BS 476 Pt 6 - 2009.pdf',
        'document_type' => 'Warrington Fire Test Report'
    ],
     [
        'title' => 'Bodycote - FR_BS 476 Pt 7 - 2009',
        'image_path' => 'assets/images/resources/Report.jpg',
        'document_path' => 'assets/images/resources/OTHER TEST REPORTS/Warrington Fire Test Report/Bodycote - FR_BS 476 Pt 7 - 2009.pdf',
        'document_type' => 'Warrington Fire Test Report'
    ],
      [
        'title' => 'ARAI - FR-Hor. Bur. - TR - 36616A',
        'image_path' => 'assets/images/resources/Report.jpg',
        'document_path' => 'assets/images/resources/ARAI Test Report/Warrington Fire Test Report/ARAI - FR-Hor. Bur. - TR - 36616A.pdf',
        'document_type' => 'Warrington Fire Test Report'
    ],
      [
        'title' => 'ARAI - FR-Ver. Bur. + Melt. Beh. - TR - 36616B',
        'image_path' => 'assets/images/resources/Report.jpg',
        'document_path' => 'assets/images/resources/ARAI Test Report/Warrington Fire Test Report/ARAI - FR-Ver. Bur. + Melt. Beh. - TR - 36616B.pdf',
        'document_type' => 'ARAI Test Report'
    ],
      [
        'title' => 'CSIR - Sound Absorbing Test - 4FR-B1 - Jun-25',
        'image_path' => 'assets/images/resources/Certificate.jpg',
        'document_path' => 'assets/images/resources/Sound Absorbing Test Certificates/Warrington Fire Test Report/CSIR - Sound Absorbing Test - 4FR-B1 - Jun-25.pdf',
        'document_type' => 'Sound Absorbing Test Certificates'
    ],
       [
        'title' => 'CSIR - Sound Transmision Test - 4FR-B1 - Jun-25',
        'image_path' => 'assets/images/resources/Certificate.jpg',
        'document_path' => 'assets/images/resources/Sound Absorbing Test Certificates/Warrington Fire Test Report/CSIR - Sound Transmision Test - 4FR-B1 - Jun-25.pdf',
        'document_type' => 'Sound Transmision Test Certificates'
    ],
        [
        'title' => 'IIT - 4Mann - ACP - 4F-4P-3R - 2024',
        'image_path' => 'assets/images/resources/Certificate.jpg',
        'document_path' => 'assets/images/resources/IIT Test Certificate/Warrington Fire Test Report/IIT - 4Mann - ACP - 4F-4P-3R - 2024.pdf',
        'document_type' => 'IIT Test Certificate'
    ],
      [
        'title' => 'India Green Building Council Certificat',
        'image_path' => 'assets/images/resources/Certificate.jpg',
        'document_path' => 'assets/images/resources/IGBC certificate/India Green Building Council Certificate.pdf',
        'document_type' => 'IIT Test Certificate'
    ],
       [
        'title' => 'ATMY - FR-B1 - ASTM E-119 - 2025',
        'image_path' => 'assets/images/resources/Certificate.jpg',
        'document_path' => 'assets/images/resources/Fire Test Certificate/ATMY - FR-B1 - ASTM E-119 - 2025.pdf',
        'document_type' => 'IIT Test Certificate'
    ],
      [
        'title' => 'ATMY - FR-B1 - EN 13501-1 - 2025',
        'image_path' => 'assets/images/resources/Certificate.jpg',
        'document_path' => 'assets/images/resources/Fire Test Certificate/ATMY - FR-B1 - EN 13501-1 - 2025.pdf',
        'document_type' => 'IIT Test Certificate'
    ],
      [
        'title' => 'ATMY - FR-B1 - NFPA-285 - 2025',
        'image_path' => 'assets/images/resources/Certificate.jpg',
        'document_path' => 'assets/images/resources/Fire Test Certificate/ATMY - FR-B1 - NFPA-285 - 2025.pdf',
        'document_type' => 'IIT Test Certificate'
    ],
       [
        'title' => '4IPL - ISO 9001-2015 - upto 12.07.2027',
        'image_path' => 'assets/images/resources/Certificate.jpg',
        'document_path' => 'assets/images/resources/ISO certificates/4IPL - ISO 9001-2015 - upto 12.07.2027.pdf',
        'document_type' => 'ISO Certificates'
    ],
    [
        'title' => 'ce.1 4IPL - ISO 14001-2015 - upto 23.04.2026',
        'image_path' => 'assets/images/resources/Certificate.jpg',
        'document_path' => 'assets/images/resources/ISO certificates/4IPL - ISO 14001-2015 - upto 23.04.2026.pdf',
        'document_type' => 'ISO Certificates'
    ],
     [
        'title' => 'ce.2 4IPL - ISO 45001-2018 - upto 23.04.2026',
        'image_path' => 'assets/images/resources/Certificate.jpg',
        'document_path' => 'assets/images/resources/ISO certificates/4IPL - ISO 45001-2018 - upto 23.04.2026.pdf',
        'document_type' => 'ISO Certificates'
    ],
      [
        'title' => '6RHP - Technical data Sheet',
        'image_path' => 'assets/images/resources/Report.jpg',
        'document_path' => 'assets/images/resources/TDS/6RHP - Technical data Sheet.pdf',
        'document_type' => 'TDS'
    ],
        [
        'title' => '3R FR B1 - Technical data Sheet',
        'image_path' => 'assets/images/resources/Report.jpg',
        'document_path' => 'assets/images/resources/TDS/3R FR B1 - Technical data Sheet.pdf',
        'document_type' => 'TDS'
    ],
        [
        'title' => '3R - Technical data Sheet 1',
        'image_path' => 'assets/images/resources/Report.jpg',
        'document_path' => 'assets/images/resources/TDS/3R - Technical data Sheet 1.pdf',
        'document_type' => 'TDS'
    ],
      [
        'title' => '3R - Technical data Sheet',
        'image_path' => 'assets/images/resources/Report.jpg',
        'document_path' => 'assets/images/resources/TDS/3R - Technical data Sheet.pdf',
        'document_type' => 'TDS'
    ],
       [
        'title' => '4F - Technical data Sheet',
        'image_path' => 'assets/images/resources/Report.jpg',
        'document_path' => 'assets/images/resources/TDS/4F - Technical data Sheet.pdf',
        'document_type' => 'TDS'
    ],
      [
        'title' => '4F FR B1- Technical data Sheet',
        'image_path' => 'assets/images/resources/Report.jpg',
        'document_path' => 'assets/images/resources/TDS/4F FR B1- Technical data Sheet.pdf',
        'document_type' => 'TDS'
    ],
     [
        'title' => '4P - Technical data Sheet',
        'image_path' => 'assets/images/resources/Report.jpg',
        'document_path' => 'assets/images/resources/TDS/4P - Technical data Sheet.pdf',
        'document_type' => 'TDS'
    ],
      [
        'title' => '4P FR B1 - Technical data Sheet',
        'image_path' => 'assets/images/resources/Report.jpg',
        'document_path' => 'assets/images/resources/TDS/4P FR B1 - Technical data Sheet.pdf',
        'document_type' => 'TDS'
    ],
       [
        'title' => '6FHP - Technical data Sheet',
        'image_path' => 'assets/images/resources/Report.jpg',
        'document_path' => 'assets/images/resources/TDS/6FHP - Technical data Sheet.pdf',
        'document_type' => 'TDS'
    ],



    // ... continue for all other entries
];



        foreach ($resources as $resource) {
            Resources::create($resource);
        }
    }
}
