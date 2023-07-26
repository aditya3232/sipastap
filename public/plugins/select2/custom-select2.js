// CSRF Token
var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').content;

$(".basic").select2({
  tags: true,
});

// ambilDataVendor di machine info
// select2 nya jgn diletakkan dibawah

// ambil data sn machine di tid_allocation
$("#tid_allocation_ambilDataSnMachine").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/tid_allocation/ambilDataSnMachine",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#tid_allocation_ambilDataSnMachine").css("font-weight", "bold");

// ambil data location id di tid_allocation
$("#tid_allocation_ambilDataLocationId").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/tid_allocation/ambilDataLocationId",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#tid_allocation_ambilDataLocationId").css("font-weight", "bold");

// ambil data sn cctv di tid_allocation
$("#tid_allocation_ambilDataSnCctv").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/tid_allocation/ambilDataSnCctv",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#tid_allocation_ambilDataSnCctv").css("font-weight", "bold");

// ambil data sn nvr di tid_allocation
$("#tid_allocation_ambilDataSnNvr").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/tid_allocation/ambilDataSnNvr",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#tid_allocation_ambilDataSnNvr").css("font-weight", "bold");

// ambil data sn ups di tid_allocation
$("#tid_allocation_ambilDataSnUps").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/tid_allocation/ambilDataSnUps",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#tid_allocation_ambilDataSnUps").css("font-weight", "bold");

// ambil data sn digital signage di tid_allocation
$("#tid_allocation_ambilDataSnDigitalSignage").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/tid_allocation/ambilDataSnDigitalSignage",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#tid_allocation_ambilDataSnDigitalSignage").css("font-weight", "bold");

// ambil data vendor di digital signage
$(".select2-digital-signage-vendor-name").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/digitalSignage/ambilDataVendor",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#digital_signage_ambilDataVendor").css("font-weight", "bold");

// ambil data vendor di cctv
$(".select2-cctv-vendor-name").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/cctv/ambilDataVendor",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#cctv_ambilDataVendor").css("font-weight", "bold");

// ambil data vendor di ups
$(".select2-ups-vendor-name").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/ups/ambilDataVendor",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#ups_ambilDataVendor").css("font-weight", "bold");

// ambil data vendor di nvr
$(".select2-nvr-vendor-name").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/nvr/ambilDataVendor",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#nvr_ambilDataVendor").css("font-weight", "bold");

// ambil data tid di cro allocation
$("#cro_allocation_ambilDataTid").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/cro_allocation/ambilDataTid",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#cro_allocation_ambilDataTid").css("font-weight", "bold");

// ambil data vendor di cro allocation
$("#cro_allocation_ambilDataVendor").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/cro_allocation/ambilDataVendor",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#cro_allocation_ambilDataVendor").css("font-weight", "bold");

// ambil data kanwil di master lokasi crm
$("#masterLokasiCrm_ambilDataKanwil").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/masterLokasiCrm/ambilDataKanwil",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#masterLokasiCrm_ambilDataKanwil").css("font-weight", "bold");

// ambil data kanwil di master lokasi crm
$("#masterLokasiCrm_ambilDataKcSupervisi").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/masterLokasiCrm/ambilDataKcSupervisi",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#masterLokasiCrm_ambilDataKcSupervisi").css("font-weight", "bold");

// ambil data uker di master lokasi crm
$("#masterLokasiCrm_ambilDataUker").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/masterLokasiCrm/ambilDataUker",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#masterLokasiCrm_ambilDataUker").css("font-weight", "bold");

// ambil data kode pos di master lokasi crm
$("#masterLokasiCrm_ambilDataKodePos").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/masterLokasiCrm/ambilDataKodePos",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#masterLokasiCrm_ambilDataKodePos").css("font-weight", "bold");

// ambil data location category di master lokasi crm
$("#masterLokasiCrm_ambilDataCategory").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
});
$("#masterLokasiCrm_ambilDataCategory").css("font-weight", "bold");

// ambil data status kepemilikan di master lokasi crm
$("#masterLokasiCrm_ambilDataStatusKepemilikan").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
});
$("#masterLokasiCrm_ambilDataStatusKepemilikan").css("font-weight", "bold");

// ambil data Detail Location Group di master lokasi crm
$("#masterLokasiCrm_ambilDataDetailLocationGroup").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
});
$("#masterLokasiCrm_ambilDataDetailLocationGroup").css("font-weight", "bold");

// ambil data Detail jenis lokasi di master lokasi crm
$("#masterLokasiCrm_ambilDataJenisDetailLokasi").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
});
$("#masterLokasiCrm_ambilDataJenisDetailLokasi").css("font-weight", "bold");

// ambil data jam operasional di master lokasi crm
$("#masterLokasiCrm_ambilDataJamOperasional").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
});
$("#masterLokasiCrm_ambilDataJamOperasional").css("font-weight", "bold");

// ambil data tid di detail parameter tid
$("#detail_parameter_tid_ambilDataTid").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/detail_parameter_tid/ambilDataTid",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#detail_parameter_tid_ambilDataTid").css("font-weight", "bold");

// ambil data location id di service point
$("#master_service_point_ambilDataLocationId").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/master_service_point/ambilDataLocationId",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#master_service_point_ambilDataLocationId").css("font-weight", "bold");

// ambil data vendor di service point
$("#master_service_point_ambilDataVendor").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/master_service_point/ambilDataVendor",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#master_service_point_ambilDataVendor").css("font-weight", "bold");

// ambil data kode pos di service point
$("#master_service_point_ambilDataKodePos").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/master_service_point/ambilDataKodePos",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#master_service_point_ambilDataKodePos").css("font-weight", "bold");

// ambil data location id di master jarak tempuh
$("#master_jarak_tempuh_ambilDataLocationId").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/master_jarak_tempuh/ambilDataLocationId",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#master_jarak_tempuh_ambilDataLocationId").css("font-weight", "bold");

// ambil data sp id di master jarak tempuh
$("#master_jarak_tempuh_ambilDataSpId").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/master_jarak_tempuh/ambilDataSpId",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#master_jarak_tempuh_ambilDataSpId").css("font-weight", "bold");

// ambil data sla category di master sla problem
$("#master_sla_problem_ambilDataSlaCategory").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/master_sla_problem/ambilDataSlaCategory",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#master_sla_problem_ambilDataSlaCategory").css("font-weight", "bold");

// ambil data sla id di mapping ticket to rtl
$("#mapping_ticket_to_rtl_ambilDataSlaId").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/mapping_ticket_to_rtl/ambilDataSlaId",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#mapping_ticket_to_rtl_ambilDataSlaId").css("font-weight", "bold");

// ambil data tid di sla tid
$("#sla_tid_ambilDataTid").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/sla_tid/ambilDataTid",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#sla_tid_ambilDataTid").css("font-weight", "bold");

// ambil data uker di target performance
$("#target_performance_ambilDataUker").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/target_performance/ambilDataUker",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#target_performance_ambilDataUker").css("font-weight", "bold");

// ambil data permissions di role
$("#admin_ambilDataPermissions").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/admin/roles/ambilDataPermissions",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
  // hiddem search box
  // minimumResultsForSearch: 20
});
$("#admin_ambilDataPermissions").css("font-weight", "bold");

// ambil data roles di permissions & users
$("#admin_ambilDataRoles").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/admin/permissions/ambilDataRoles",
    type: "POST",
    dataType: "json",
    delay: 250,
    minimumResultsForSearch: 20,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#admin_ambilDataRoles").css("font-weight", "bold");

// ambil data uker di relokasi tid
$("#relokasi_tid_ambilDataUker").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/relokasiTid/ambilDataUker",
    type: "POST",
    dataType: "json",
    delay: 250,
    minimumResultsForSearch: 20,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$("#relokasi_tid_ambilDataUker").css("font-weight", "bold");

// ====================================================================================================================================================================
var formSmall = $(".form-small")
  .select2({ tags: true })
  .addClass("form-control-sm");

// formSmall.data("select2").$container.addClass("form-control-sm");

$(".nested").select2({
  tags: true,
});
$(".tagging").select2({
  tags: true,
});
$(".disabled-results").select2();
$(".placeholder").select2({
  placeholder: "Make a Selection",
  allowClear: true,
});

function formatState(state) {
  if (!state.id) {
    return state.text;
  }
  var baseClass = "flaticon-";
  var $state = $(
    '<span><i class="' +
      baseClass +
      state.element.value.toLowerCase() +
      '" /> ' +
      state.text +
      "</i> </span>"
  );
  return $state;
}

$(".templating").select2({
  templateSelection: formatState,
});

$(".select2-sn-machine").select2({
  language: {
    noResults: function () {
      return "Data tidak ditemukan";
    },
  },
  ajax: {
    url: "/tidAllocation/get-machine-info",
    type: "POST",
    dataType: "json",
    delay: 250,
    minimumResultsForSearch: 20,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$(".select2-location-id").select2({
  language: {
    noResults: function () {
      return "Data tidak ditemukan";
    },
  },
  ajax: {
    url: "/tidAllocation/get-location-id",
    type: "POST",
    dataType: "json",
    delay: 250,
    minimumResultsForSearch: 20,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$(".select2-sn-cctv").select2({
  language: {
    noResults: function () {
      return "Data tidak ditemukan";
    },
  },
  ajax: {
    url: "/tidAllocation/get-cctv",
    type: "POST",
    dataType: "json",
    delay: 250,
    minimumResultsForSearch: 20,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$(".select2-sn-nvr").select2({
  language: {
    noResults: function () {
      return "Data tidak ditemukan";
    },
  },
  ajax: {
    url: "/tidAllocation/get-nvr",
    type: "POST",
    dataType: "json",
    delay: 250,
    minimumResultsForSearch: 20,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$(".select2-sn-ups").select2({
  language: {
    noResults: function () {
      return "Data tidak ditemukan";
    },
  },
  ajax: {
    url: "/tidAllocation/get-ups",
    type: "POST",
    dataType: "json",
    delay: 250,
    minimumResultsForSearch: 20,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$(".select2-sn-digital-signage").select2({
  language: {
    noResults: function () {
      return "Data tidak ditemukan";
    },
  },
  ajax: {
    url: "/tidAllocation/get-digital-signage",
    type: "POST",
    dataType: "json",
    delay: 250,
    minimumResultsForSearch: 20,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});

$(".select2-cro-allocation-tid").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/croAllocation/get-tid-allocation",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$(".select2-tid-allocation-vendor-name").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/croAllocation/ambilDataVendor",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});

$(".select2-location-id").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/masterServicePoint/get-tid-allocation",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$(".select2-vendor-name").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/masterServicePoint/get-master-vendor",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$(".select2-kode-pos").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/masterServicePoint/get-master-kode-pos",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});

$(".select2-location-id").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/masterJarakTempuh/get-master-lokasi-crm",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$(".select2-sp-id").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/masterJarakTempuh/get-master-service-point",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});

$(".select2-sla-id").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/masterSLAProblem/get-sla-id",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
$(".select2-sla-category").select2();

$(".select2-detail-parameter-tid").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/detailParameterTid/get-tid-allocation",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});

$(".select2-tid").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/slaTid/get-tid-allocation",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});

$(".select2-user-role").select2({
  language: {
    noResults: function (params) {
      return "Data tidak ditemukan.";
    },
  },
  ajax: {
    url: "/admin/users/get-users-group",
    type: "POST",
    dataType: "json",
    delay: 250,
    data: function (params) {
      return {
        _token: CSRF_TOKEN,
        search: params.term,
      };
    },
    processResults: function (response) {
      return response;
    },
    cache: true,
  },
});
