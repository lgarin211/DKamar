<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get("/", function () {
    return view("welcome");
});

Route::get("/login", function () {
    return view("login");
});
Route::post("/login", function () {
    unset($_POST["_token"]);
    $u = [
        "Wa" => $_POST["PHO"],
        "Tgl_lahir" => $_POST["THO"],
    ];

    $A = DB::table("mhsrtb")
        ->where("Wa", $_POST["PHO"])
        ->where("Tgl_lahir", $_POST["THO"]);
    // dd($A->dump());
    $A = $A->get();
    // dd($A);
    if (empty($A->Umdp)) {
        return redirect("/regis");
    } else {
        $u = [
            "Name" => $A->Name,
            "Kelas" => $A->Kelas,
            "Wa" => $A->Wa,
            "Tgl_lahir" => $A->Tgl_lahir,
            "GPL" => $A->GPL,
        ];
        session()->put($u);
        return redirect("/core");
    }
});
Route::post("/regis", function () {
    unset($_POST["_token"]);
    $u = [
        "Name" => $_POST["Nama"],
        "Kelas" => $_POST["Kelas"],
        "Wa" => $_POST["Wa"],
        "Tgl_lahir" => $_POST["tgl"],
        "GPL" => $_POST["GPL"],
    ];
    $A = DB::table("mhsrtb")
        // ->where(["Name" => $_POST["Nama"], "Kelas" => $_POST["Kelas"]])
        ->where("Name", $_POST["Nama"])
        ->where("Kelas", $_POST["Kelas"])
        ->get();
    if (count($A) > 0) {
        return view("register");
    } else {
        DB::table("mhsrtb")->insert($u);
    }
    session()->put($u);
    return redirect("/Shadi");
});

// /Shadi
Route::get("/Shadi", function () {
    return view("Shadi");
});
Route::get("/Shadip", function () {
    $u = [
        "Name" => session()->get("Name"),
        "Kelas" => session()->get("Kelas"),
    ];
    $A = DB::table("mhsrtb")->where("Name", $u["Name"])->where("Kelas", $u["Kelas"]);
    $B = json_encode($_GET);
    $C = $A->update(["Umdp" => $B]);
});

Route::get("/core", function () {
    return view("All");
});

Route::get("/coreuv", function () {
    $d = DB::table("mhsrtb")
        ->where("Kelas", session()->get("Kelas"))
        ->get();
    $data = [];
    foreach ($d as $key => $value) {
        $data[$value->Name] = json_decode($value->Umdp);
    }
    $p = $data;
    return response()->json($p);
});

Route::get("/Auth/Doc/PoinLast", function () {
    return view("template/Doc");
});

Route::get("/regis", function () {
    return view("register");
});

Route::group(["prefix" => "admin"], function () {
    Voyager::routes();
});
