<?php 
include "includes/header.php";
include "includes/navigation.php";
 	if (isset($_GET['source'])) 
 	{ 
        $source=$_GET['source'];
    }
    else
    {
        $source="";
    }

	switch ($source) 
    {
      
        case 'companyformationservices':
             include "pages/company_formation_services.php";
            break;
        case 'taxandaccounting':
             include "pages/tax_accounting.php";
            break;
        case 'businesscenterservices':
             include "pages/business_service_center.php";
            break;
        case 'visaservices':
             include "pages/visa_services.php";
            break;
         case 'financingfundingservices':
             include "pages/financing_funding_services.php";
            break;
         case 'wealthmanagementservices':
             include "pages/wealth_management_services.php";
            break;
         case 'globalsourcingagencyservices':
             include "pages/global_sourcing_services.php";
            break;
         case 'switchinswiftservices':
             include "pages/switch_in_swift_services.php";
            break;
         case 'introductionofhongkongbusiness':
             include "pages/introduction_of_hongkong_business.php";
            break;
         case 'typesofhongkongbusiness':
             include "pages/types_of_hongkong_business.php";
            break;
         case 'hongkongprivatelimited':
             include "pages/hongkong_private_limited.php";
            break;
         case 'hongkongreadyshelf':
             include "pages/hongkong_ready_shelf.php";
            break;
         case 'compliancehongkongprivate':
             include "pages/compliance_hongkong_private.php";
            break;
         case 'hongkongbranchregistration':
             include "pages/hongkong_branch_registration.php";
            break;
         case 'taxinhongkong':
             include "pages/tax_in_hongkong.php";
            break;
         case 'profitstaxinhongkong':
             include "pages/profits_tax_in_hongkong.php";
            break;
         case 'salariestaxinhongkong':
             include "pages/salaries_tax_in_hongkong.php";
            break; 
        case 'salarieshongkongobligation':
             include "pages/salaries_hongkong_obligation.php";
            break;
        case 'questionandanswer':
             include "pages/question_and_answer.php";
            break;
        case 'hongkongvisa':
             include "pages/hongkong_visa.php";
            break;
        case 'hongkongpermit':
             include "pages/hongkong_permit.php";
            break;
        case 'hongkongemploymentvisa':
             include "pages/hongkong_employement_visa.php";
            break;
        case 'hongkongbusinessvisa':
             include "pages/hongkong_business_visa.php";
            break;
        case 'hongkongpermanentresidence':
             include "pages/hongkong_permanent_residence.php";
            break;
        case 'employementordinance':
             include "pages/employement_ordinance_hongkong.php";
            break;
        case 'minimumwagehongkong':
             include "pages/minimum_wage_hongkong.php";
            break;
        case 'mandatoryhongkong':
             include "pages/mandatory_hongkong.php";
            break;
        case 'insuranceforemployee':
             include "pages/insurance_for_employee.php";
            break;
        case 'contactus':
             include "pages/contact_us.php";
            break;
        case 'aboutus':
             include "pages/about_us.php";
            break;
        default:
        	include "includes/imageslider.php";
        	include "includes/featured.php";
        	include "includes/blog.php";
        break;
    } 
include "includes/footer.php";
 ?>