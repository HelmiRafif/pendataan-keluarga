<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->insert([
            ['name' => 'admin', 'password' => bcrypt('qwer1234')],

            ['name' => 'A1', 'password' =>  bcrypt('12345') ],
            ['name' => 'A2', 'password' =>  bcrypt('12345') ],
            ['name' => 'A3', 'password' =>  bcrypt('12345') ],
            ['name' => 'A4', 'password' =>  bcrypt('12345') ],
            ['name' => 'A5', 'password' =>  bcrypt('12345') ],
            ['name' => 'A6', 'password' =>  bcrypt('12345') ],
            ['name' => 'A7', 'password' =>  bcrypt('12345') ],
            ['name' => 'A8', 'password' =>  bcrypt('12345') ],
            ['name' => 'A9', 'password' =>  bcrypt('12345') ],
            ['name' => 'A10', 'password' =>  bcrypt('12345') ],
            ['name' => 'A11', 'password' =>  bcrypt('12345') ],
            ['name' => 'A12', 'password' =>  bcrypt('12345') ],
            ['name' => 'A13', 'password' =>  bcrypt('12345') ],
            ['name' => 'A14', 'password' =>  bcrypt('12345') ],
            ['name' => 'A15', 'password' =>  bcrypt('12345') ],
            ['name' => 'A16', 'password' =>  bcrypt('12345') ],
            ['name' => 'A17', 'password' =>  bcrypt('12345') ],
            ['name' => 'A18', 'password' =>  bcrypt('12345') ],
            ['name' => 'A19', 'password' =>  bcrypt('12345') ],
            ['name' => 'A20', 'password' =>  bcrypt('12345') ],
            ['name' => 'A21', 'password' =>  bcrypt('12345') ],
            ['name' => 'A22', 'password' =>  bcrypt('12345') ],
            ['name' => 'A23', 'password' =>  bcrypt('12345') ],
            ['name' => 'A24', 'password' =>  bcrypt('12345') ],
            ['name' => 'A25', 'password' =>  bcrypt('12345') ],
            ['name' => 'A26', 'password' =>  bcrypt('12345') ],
            ['name' => 'A27', 'password' =>  bcrypt('12345') ],
            ['name' => 'A28', 'password' =>  bcrypt('12345') ],
            ['name' => 'A29', 'password' =>  bcrypt('12345') ],
            ['name' => 'A30', 'password' =>  bcrypt('12345') ],

            ['name' => 'B1', 'password' =>  bcrypt('12345') ],
            ['name' => 'B2', 'password' =>  bcrypt('12345') ],
            ['name' => 'B3', 'password' =>  bcrypt('12345') ],
            ['name' => 'B4', 'password' =>  bcrypt('12345') ],
            ['name' => 'B5', 'password' =>  bcrypt('12345') ],
            ['name' => 'B6', 'password' =>  bcrypt('12345') ],
            ['name' => 'B7', 'password' =>  bcrypt('12345') ],
            ['name' => 'B8', 'password' =>  bcrypt('12345') ],
            ['name' => 'B9', 'password' =>  bcrypt('12345') ],
            ['name' => 'B10', 'password' =>  bcrypt('12345') ],
            ['name' => 'B11', 'password' =>  bcrypt('12345') ],
            ['name' => 'B12', 'password' =>  bcrypt('12345') ],
            ['name' => 'B13', 'password' =>  bcrypt('12345') ],
            ['name' => 'B14', 'password' =>  bcrypt('12345') ],
            ['name' => 'B15', 'password' =>  bcrypt('12345') ],
            ['name' => 'B16', 'password' =>  bcrypt('12345') ],
            ['name' => 'B17', 'password' =>  bcrypt('12345') ],
            ['name' => 'B18', 'password' =>  bcrypt('12345') ],
            ['name' => 'B19', 'password' =>  bcrypt('12345') ],
            ['name' => 'B20', 'password' =>  bcrypt('12345') ],
            ['name' => 'B21', 'password' =>  bcrypt('12345') ],
            ['name' => 'B22', 'password' =>  bcrypt('12345') ],
            ['name' => 'B23', 'password' =>  bcrypt('12345') ],
            ['name' => 'B24', 'password' =>  bcrypt('12345') ],
            ['name' => 'B25', 'password' =>  bcrypt('12345') ],
            ['name' => 'B26', 'password' =>  bcrypt('12345') ],
            ['name' => 'B27', 'password' =>  bcrypt('12345') ],
            ['name' => 'B28', 'password' =>  bcrypt('12345') ],
            ['name' => 'B29', 'password' =>  bcrypt('12345') ],
            ['name' => 'B30', 'password' =>  bcrypt('12345') ],

            ['name' => 'C1', 'password' =>  bcrypt('12345') ],
            ['name' => 'C2', 'password' =>  bcrypt('12345') ],
            ['name' => 'C3', 'password' =>  bcrypt('12345') ],
            ['name' => 'C4', 'password' =>  bcrypt('12345') ],
            ['name' => 'C5', 'password' =>  bcrypt('12345') ],
            ['name' => 'C6', 'password' =>  bcrypt('12345') ],
            ['name' => 'C7', 'password' =>  bcrypt('12345') ],
            ['name' => 'C8', 'password' =>  bcrypt('12345') ],
            ['name' => 'C9', 'password' =>  bcrypt('12345') ],
            ['name' => 'C10', 'password' =>  bcrypt('12345') ],
            ['name' => 'C11', 'password' =>  bcrypt('12345') ],
            ['name' => 'C12', 'password' =>  bcrypt('12345') ],
            ['name' => 'C13', 'password' =>  bcrypt('12345') ],
            ['name' => 'C14', 'password' =>  bcrypt('12345') ],
            ['name' => 'C15', 'password' =>  bcrypt('12345') ],
            ['name' => 'C16', 'password' =>  bcrypt('12345') ],
            ['name' => 'C17', 'password' =>  bcrypt('12345') ],
            ['name' => 'C18', 'password' =>  bcrypt('12345') ],
            ['name' => 'C19', 'password' =>  bcrypt('12345') ],
            ['name' => 'C20', 'password' =>  bcrypt('12345') ],
            ['name' => 'C21', 'password' =>  bcrypt('12345') ],
            ['name' => 'C22', 'password' =>  bcrypt('12345') ],
            ['name' => 'C23', 'password' =>  bcrypt('12345') ],
            ['name' => 'C24', 'password' =>  bcrypt('12345') ],
            ['name' => 'C25', 'password' =>  bcrypt('12345') ],
            ['name' => 'C26', 'password' =>  bcrypt('12345') ],
            ['name' => 'C27', 'password' =>  bcrypt('12345') ],
            ['name' => 'C28', 'password' =>  bcrypt('12345') ],
            ['name' => 'C29', 'password' =>  bcrypt('12345') ],
            ['name' => 'C30', 'password' =>  bcrypt('12345') ],

            ['name' => 'D1', 'password' =>  bcrypt('12345') ],
            ['name' => 'D2', 'password' =>  bcrypt('12345') ],
            ['name' => 'D3', 'password' =>  bcrypt('12345') ],
            ['name' => 'D4', 'password' =>  bcrypt('12345') ],
            ['name' => 'D5', 'password' =>  bcrypt('12345') ],
            ['name' => 'D6', 'password' =>  bcrypt('12345') ],
            ['name' => 'D7', 'password' =>  bcrypt('12345') ],
            ['name' => 'D8', 'password' =>  bcrypt('12345') ],
            ['name' => 'D9', 'password' =>  bcrypt('12345') ],
            ['name' => 'D10', 'password' =>  bcrypt('12345') ],
            ['name' => 'D11', 'password' =>  bcrypt('12345') ],
            ['name' => 'D12', 'password' =>  bcrypt('12345') ],
            ['name' => 'D13', 'password' =>  bcrypt('12345') ],
            ['name' => 'D14', 'password' =>  bcrypt('12345') ],
            ['name' => 'D15', 'password' =>  bcrypt('12345') ],
            ['name' => 'D16', 'password' =>  bcrypt('12345') ],
            ['name' => 'D17', 'password' =>  bcrypt('12345') ],
            ['name' => 'D18', 'password' =>  bcrypt('12345') ],
            ['name' => 'D19', 'password' =>  bcrypt('12345') ],
            ['name' => 'D20', 'password' =>  bcrypt('12345') ],
            ['name' => 'D21', 'password' =>  bcrypt('12345') ],
            ['name' => 'D22', 'password' =>  bcrypt('12345') ],
            ['name' => 'D23', 'password' =>  bcrypt('12345') ],
            ['name' => 'D24', 'password' =>  bcrypt('12345') ],
            ['name' => 'D25', 'password' =>  bcrypt('12345') ],
            ['name' => 'D26', 'password' =>  bcrypt('12345') ],
            ['name' => 'D27', 'password' =>  bcrypt('12345') ],
            ['name' => 'D28', 'password' =>  bcrypt('12345') ],
            ['name' => 'D29', 'password' =>  bcrypt('12345') ],
            ['name' => 'D30', 'password' =>  bcrypt('12345') ],

            ['name' => 'E1', 'password' =>  bcrypt('12345') ],
            ['name' => 'E2', 'password' =>  bcrypt('12345') ],
            ['name' => 'E3', 'password' =>  bcrypt('12345') ],
            ['name' => 'E4', 'password' =>  bcrypt('12345') ],
            ['name' => 'E5', 'password' =>  bcrypt('12345') ],
            ['name' => 'E6', 'password' =>  bcrypt('12345') ],
            ['name' => 'E7', 'password' =>  bcrypt('12345') ],
            ['name' => 'E8', 'password' =>  bcrypt('12345') ],
            ['name' => 'E9', 'password' =>  bcrypt('12345') ],
            ['name' => 'E10', 'password' =>  bcrypt('12345') ],
            ['name' => 'E11', 'password' =>  bcrypt('12345') ],
            ['name' => 'E12', 'password' =>  bcrypt('12345') ],
            ['name' => 'E13', 'password' =>  bcrypt('12345') ],
            ['name' => 'E14', 'password' =>  bcrypt('12345') ],
            ['name' => 'E15', 'password' =>  bcrypt('12345') ],
            ['name' => 'E16', 'password' =>  bcrypt('12345') ],
            ['name' => 'E17', 'password' =>  bcrypt('12345') ],
            ['name' => 'E18', 'password' =>  bcrypt('12345') ],
            ['name' => 'E19', 'password' =>  bcrypt('12345') ],
            ['name' => 'E20', 'password' =>  bcrypt('12345') ],
            ['name' => 'E21', 'password' =>  bcrypt('12345') ],
            ['name' => 'E22', 'password' =>  bcrypt('12345') ],
            ['name' => 'E23', 'password' =>  bcrypt('12345') ],
            ['name' => 'E24', 'password' =>  bcrypt('12345') ],
            ['name' => 'E25', 'password' =>  bcrypt('12345') ],
            ['name' => 'E26', 'password' =>  bcrypt('12345') ],
            ['name' => 'E27', 'password' =>  bcrypt('12345') ],
            ['name' => 'E28', 'password' =>  bcrypt('12345') ],
            ['name' => 'E29', 'password' =>  bcrypt('12345') ],
            ['name' => 'E30', 'password' =>  bcrypt('12345') ],

            ['name' => 'F1', 'password' =>  bcrypt('12345') ],
            ['name' => 'F2', 'password' =>  bcrypt('12345') ],
            ['name' => 'F3', 'password' =>  bcrypt('12345') ],
            ['name' => 'F4', 'password' =>  bcrypt('12345') ],
            ['name' => 'F5', 'password' =>  bcrypt('12345') ],
            ['name' => 'F6', 'password' =>  bcrypt('12345') ],
            ['name' => 'F7', 'password' =>  bcrypt('12345') ],
            ['name' => 'F8', 'password' =>  bcrypt('12345') ],
            ['name' => 'F9', 'password' =>  bcrypt('12345') ],
            ['name' => 'F10', 'password' =>  bcrypt('12345') ],
            ['name' => 'F11', 'password' =>  bcrypt('12345') ],
            ['name' => 'F12', 'password' =>  bcrypt('12345') ],
            ['name' => 'F13', 'password' =>  bcrypt('12345') ],
            ['name' => 'F14', 'password' =>  bcrypt('12345') ],
            ['name' => 'F15', 'password' =>  bcrypt('12345') ],
            ['name' => 'F16', 'password' =>  bcrypt('12345') ],
            ['name' => 'F17', 'password' =>  bcrypt('12345') ],
            ['name' => 'F18', 'password' =>  bcrypt('12345') ],
            ['name' => 'F19', 'password' =>  bcrypt('12345') ],
            ['name' => 'F20', 'password' =>  bcrypt('12345') ],
            ['name' => 'F21', 'password' =>  bcrypt('12345') ],
            ['name' => 'F22', 'password' =>  bcrypt('12345') ],
            ['name' => 'F23', 'password' =>  bcrypt('12345') ],
            ['name' => 'F24', 'password' =>  bcrypt('12345') ],
            ['name' => 'F25', 'password' =>  bcrypt('12345') ],
            ['name' => 'F26', 'password' =>  bcrypt('12345') ],
            ['name' => 'F27', 'password' =>  bcrypt('12345') ],
            ['name' => 'F28', 'password' =>  bcrypt('12345') ],
            ['name' => 'F29', 'password' =>  bcrypt('12345') ],
            ['name' => 'F30', 'password' =>  bcrypt('12345') ],

            ['name' => 'G1', 'password' =>  bcrypt('12345') ],
            ['name' => 'G2', 'password' =>  bcrypt('12345') ],
            ['name' => 'G3', 'password' =>  bcrypt('12345') ],
            ['name' => 'G4', 'password' =>  bcrypt('12345') ],
            ['name' => 'G5', 'password' =>  bcrypt('12345') ],
            ['name' => 'G6', 'password' =>  bcrypt('12345') ],
            ['name' => 'G7', 'password' =>  bcrypt('12345') ],
            ['name' => 'G8', 'password' =>  bcrypt('12345') ],
            ['name' => 'G9', 'password' =>  bcrypt('12345') ],
            ['name' => 'G10', 'password' =>  bcrypt('12345') ],
            ['name' => 'G11', 'password' =>  bcrypt('12345') ],
            ['name' => 'G12', 'password' =>  bcrypt('12345') ],
            ['name' => 'G13', 'password' =>  bcrypt('12345') ],
            ['name' => 'G14', 'password' =>  bcrypt('12345') ],
            ['name' => 'G15', 'password' =>  bcrypt('12345') ],
            ['name' => 'G16', 'password' =>  bcrypt('12345') ],
            ['name' => 'G17', 'password' =>  bcrypt('12345') ],
            ['name' => 'G18', 'password' =>  bcrypt('12345') ],
            ['name' => 'G19', 'password' =>  bcrypt('12345') ],
            ['name' => 'G20', 'password' =>  bcrypt('12345') ],
            ['name' => 'G21', 'password' =>  bcrypt('12345') ],
            ['name' => 'G22', 'password' =>  bcrypt('12345') ],
            ['name' => 'G23', 'password' =>  bcrypt('12345') ],
            ['name' => 'G24', 'password' =>  bcrypt('12345') ],
            ['name' => 'G25', 'password' =>  bcrypt('12345') ],
            ['name' => 'G26', 'password' =>  bcrypt('12345') ],
            ['name' => 'G27', 'password' =>  bcrypt('12345') ],
            ['name' => 'G28', 'password' =>  bcrypt('12345') ],
            ['name' => 'G29', 'password' =>  bcrypt('12345') ],
            ['name' => 'G30', 'password' =>  bcrypt('12345') ],

            ['name' => 'H1', 'password' =>  bcrypt('12345') ],
            ['name' => 'H2', 'password' =>  bcrypt('12345') ],
            ['name' => 'H3', 'password' =>  bcrypt('12345') ],
            ['name' => 'H4', 'password' =>  bcrypt('12345') ],
            ['name' => 'H5', 'password' =>  bcrypt('12345') ],
            ['name' => 'H6', 'password' =>  bcrypt('12345') ],
            ['name' => 'H7', 'password' =>  bcrypt('12345') ],
            ['name' => 'H8', 'password' =>  bcrypt('12345') ],
            ['name' => 'H9', 'password' =>  bcrypt('12345') ],
            ['name' => 'H10', 'password' =>  bcrypt('12345') ],
            ['name' => 'H11', 'password' =>  bcrypt('12345') ],
            ['name' => 'H12', 'password' =>  bcrypt('12345') ],
            ['name' => 'H13', 'password' =>  bcrypt('12345') ],
            ['name' => 'H14', 'password' =>  bcrypt('12345') ],
            ['name' => 'H15', 'password' =>  bcrypt('12345') ],
            ['name' => 'H16', 'password' =>  bcrypt('12345') ],
            ['name' => 'H17', 'password' =>  bcrypt('12345') ],
            ['name' => 'H18', 'password' =>  bcrypt('12345') ],
            ['name' => 'H19', 'password' =>  bcrypt('12345') ],
            ['name' => 'H20', 'password' =>  bcrypt('12345') ],
            ['name' => 'H21', 'password' =>  bcrypt('12345') ],
            ['name' => 'H22', 'password' =>  bcrypt('12345') ],
            ['name' => 'H23', 'password' =>  bcrypt('12345') ],
            ['name' => 'H24', 'password' =>  bcrypt('12345') ],
            ['name' => 'H25', 'password' =>  bcrypt('12345') ],
            ['name' => 'H26', 'password' =>  bcrypt('12345') ],
            ['name' => 'H27', 'password' =>  bcrypt('12345') ],
            ['name' => 'H28', 'password' =>  bcrypt('12345') ],
            ['name' => 'H29', 'password' =>  bcrypt('12345') ],
            ['name' => 'H30', 'password' =>  bcrypt('12345') ],

            ['name' => 'I1', 'password' =>  bcrypt('12345') ],
            ['name' => 'I2', 'password' =>  bcrypt('12345') ],
            ['name' => 'I3', 'password' =>  bcrypt('12345') ],
            ['name' => 'I4', 'password' =>  bcrypt('12345') ],
            ['name' => 'I5', 'password' =>  bcrypt('12345') ],
            ['name' => 'I6', 'password' =>  bcrypt('12345') ],
            ['name' => 'I7', 'password' =>  bcrypt('12345') ],
            ['name' => 'I8', 'password' =>  bcrypt('12345') ],
            ['name' => 'I9', 'password' =>  bcrypt('12345') ],
            ['name' => 'I10', 'password' =>  bcrypt('12345') ],
            ['name' => 'I11', 'password' =>  bcrypt('12345') ],
            ['name' => 'I12', 'password' =>  bcrypt('12345') ],
            ['name' => 'I13', 'password' =>  bcrypt('12345') ],
            ['name' => 'I14', 'password' =>  bcrypt('12345') ],
            ['name' => 'I15', 'password' =>  bcrypt('12345') ],
            ['name' => 'I16', 'password' =>  bcrypt('12345') ],
            ['name' => 'I17', 'password' =>  bcrypt('12345') ],
            ['name' => 'I18', 'password' =>  bcrypt('12345') ],
            ['name' => 'I19', 'password' =>  bcrypt('12345') ],
            ['name' => 'I20', 'password' =>  bcrypt('12345') ],
            ['name' => 'I21', 'password' =>  bcrypt('12345') ],
            ['name' => 'I22', 'password' =>  bcrypt('12345') ],
            ['name' => 'I23', 'password' =>  bcrypt('12345') ],
            ['name' => 'I24', 'password' =>  bcrypt('12345') ],
            ['name' => 'I25', 'password' =>  bcrypt('12345') ],
            ['name' => 'I26', 'password' =>  bcrypt('12345') ],
            ['name' => 'I27', 'password' =>  bcrypt('12345') ],
            ['name' => 'I28', 'password' =>  bcrypt('12345') ],
            ['name' => 'I29', 'password' =>  bcrypt('12345') ],
            ['name' => 'I30', 'password' =>  bcrypt('12345') ],

            ['name' => 'J1', 'password' =>  bcrypt('12345') ],
            ['name' => 'J2', 'password' =>  bcrypt('12345') ],
            ['name' => 'J3', 'password' =>  bcrypt('12345') ],
            ['name' => 'J4', 'password' =>  bcrypt('12345') ],
            ['name' => 'J5', 'password' =>  bcrypt('12345') ],
            ['name' => 'J6', 'password' =>  bcrypt('12345') ],
            ['name' => 'J7', 'password' =>  bcrypt('12345') ],
            ['name' => 'J8', 'password' =>  bcrypt('12345') ],
            ['name' => 'J9', 'password' =>  bcrypt('12345') ],
            ['name' => 'J10', 'password' =>  bcrypt('12345') ],
            ['name' => 'J11', 'password' =>  bcrypt('12345') ],
            ['name' => 'J12', 'password' =>  bcrypt('12345') ],
            ['name' => 'J13', 'password' =>  bcrypt('12345') ],
            ['name' => 'J14', 'password' =>  bcrypt('12345') ],
            ['name' => 'J15', 'password' =>  bcrypt('12345') ],
            ['name' => 'J16', 'password' =>  bcrypt('12345') ],
            ['name' => 'J17', 'password' =>  bcrypt('12345') ],
            ['name' => 'J18', 'password' =>  bcrypt('12345') ],
            ['name' => 'J19', 'password' =>  bcrypt('12345') ],
            ['name' => 'J20', 'password' =>  bcrypt('12345') ],
            ['name' => 'J21', 'password' =>  bcrypt('12345') ],
            ['name' => 'J22', 'password' =>  bcrypt('12345') ],
            ['name' => 'J23', 'password' =>  bcrypt('12345') ],
            ['name' => 'J24', 'password' =>  bcrypt('12345') ],
            ['name' => 'J25', 'password' =>  bcrypt('12345') ],
            ['name' => 'J26', 'password' =>  bcrypt('12345') ],
            ['name' => 'J27', 'password' =>  bcrypt('12345') ],
            ['name' => 'J28', 'password' =>  bcrypt('12345') ],
            ['name' => 'J29', 'password' =>  bcrypt('12345') ],
            ['name' => 'J30', 'password' =>  bcrypt('12345') ],

            ['name' => 'K1', 'password' =>  bcrypt('12345') ],
            ['name' => 'K2', 'password' =>  bcrypt('12345') ],
            ['name' => 'K3', 'password' =>  bcrypt('12345') ],
            ['name' => 'K4', 'password' =>  bcrypt('12345') ],
            ['name' => 'K5', 'password' =>  bcrypt('12345') ],
            ['name' => 'K6', 'password' =>  bcrypt('12345') ],
            ['name' => 'K7', 'password' =>  bcrypt('12345') ],
            ['name' => 'K8', 'password' =>  bcrypt('12345') ],
            ['name' => 'K9', 'password' =>  bcrypt('12345') ],
            ['name' => 'K10', 'password' =>  bcrypt('12345') ],
            ['name' => 'K11', 'password' =>  bcrypt('12345') ],
            ['name' => 'K12', 'password' =>  bcrypt('12345') ],
            ['name' => 'K13', 'password' =>  bcrypt('12345') ],
            ['name' => 'K14', 'password' =>  bcrypt('12345') ],
            ['name' => 'K15', 'password' =>  bcrypt('12345') ],
            ['name' => 'K16', 'password' =>  bcrypt('12345') ],
            ['name' => 'K17', 'password' =>  bcrypt('12345') ],
            ['name' => 'K18', 'password' =>  bcrypt('12345') ],
            ['name' => 'K19', 'password' =>  bcrypt('12345') ],
            ['name' => 'K20', 'password' =>  bcrypt('12345') ],
            ['name' => 'K21', 'password' =>  bcrypt('12345') ],
            ['name' => 'K22', 'password' =>  bcrypt('12345') ],
            ['name' => 'K23', 'password' =>  bcrypt('12345') ],
            ['name' => 'K24', 'password' =>  bcrypt('12345') ],
            ['name' => 'K25', 'password' =>  bcrypt('12345') ],
            ['name' => 'K26', 'password' =>  bcrypt('12345') ],
            ['name' => 'K27', 'password' =>  bcrypt('12345') ],
            ['name' => 'K28', 'password' =>  bcrypt('12345') ],
            ['name' => 'K29', 'password' =>  bcrypt('12345') ],
            ['name' => 'K30', 'password' =>  bcrypt('12345') ],

            ['name' => 'L1', 'password' =>  bcrypt('12345') ],
            ['name' => 'L2', 'password' =>  bcrypt('12345') ],
            ['name' => 'L3', 'password' =>  bcrypt('12345') ],
            ['name' => 'L4', 'password' =>  bcrypt('12345') ],
            ['name' => 'L5', 'password' =>  bcrypt('12345') ],
            ['name' => 'L6', 'password' =>  bcrypt('12345') ],
            ['name' => 'L7', 'password' =>  bcrypt('12345') ],
            ['name' => 'L8', 'password' =>  bcrypt('12345') ],
            ['name' => 'L9', 'password' =>  bcrypt('12345') ],
            ['name' => 'L10', 'password' =>  bcrypt('12345') ],
            ['name' => 'L11', 'password' =>  bcrypt('12345') ],
            ['name' => 'L12', 'password' =>  bcrypt('12345') ],
            ['name' => 'L13', 'password' =>  bcrypt('12345') ],
            ['name' => 'L14', 'password' =>  bcrypt('12345') ],
            ['name' => 'L15', 'password' =>  bcrypt('12345') ],
            ['name' => 'L16', 'password' =>  bcrypt('12345') ],
            ['name' => 'L17', 'password' =>  bcrypt('12345') ],
            ['name' => 'L18', 'password' =>  bcrypt('12345') ],
            ['name' => 'L19', 'password' =>  bcrypt('12345') ],
            ['name' => 'L20', 'password' =>  bcrypt('12345') ],
            ['name' => 'L21', 'password' =>  bcrypt('12345') ],
            ['name' => 'L22', 'password' =>  bcrypt('12345') ],
            ['name' => 'L23', 'password' =>  bcrypt('12345') ],
            ['name' => 'L24', 'password' =>  bcrypt('12345') ],
            ['name' => 'L25', 'password' =>  bcrypt('12345') ],
            ['name' => 'L26', 'password' =>  bcrypt('12345') ],
            ['name' => 'L27', 'password' =>  bcrypt('12345') ],
            ['name' => 'L28', 'password' =>  bcrypt('12345') ],
            ['name' => 'L29', 'password' =>  bcrypt('12345') ],
            ['name' => 'L30', 'password' =>  bcrypt('12345') ],

            ['name' => 'M1', 'password' =>  bcrypt('12345') ],
            ['name' => 'M2', 'password' =>  bcrypt('12345') ],
            ['name' => 'M3', 'password' =>  bcrypt('12345') ],
            ['name' => 'M4', 'password' =>  bcrypt('12345') ],
            ['name' => 'M5', 'password' =>  bcrypt('12345') ],
            ['name' => 'M6', 'password' =>  bcrypt('12345') ],
            ['name' => 'M7', 'password' =>  bcrypt('12345') ],
            ['name' => 'M8', 'password' =>  bcrypt('12345') ],
            ['name' => 'M9', 'password' =>  bcrypt('12345') ],
            ['name' => 'M10', 'password' =>  bcrypt('12345') ],
            ['name' => 'M11', 'password' =>  bcrypt('12345') ],
            ['name' => 'M12', 'password' =>  bcrypt('12345') ],
            ['name' => 'M13', 'password' =>  bcrypt('12345') ],
            ['name' => 'M14', 'password' =>  bcrypt('12345') ],
            ['name' => 'M15', 'password' =>  bcrypt('12345') ],
            ['name' => 'M16', 'password' =>  bcrypt('12345') ],
            ['name' => 'M17', 'password' =>  bcrypt('12345') ],
            ['name' => 'M18', 'password' =>  bcrypt('12345') ],
            ['name' => 'M19', 'password' =>  bcrypt('12345') ],
            ['name' => 'M20', 'password' =>  bcrypt('12345') ],
            ['name' => 'M21', 'password' =>  bcrypt('12345') ],
            ['name' => 'M22', 'password' =>  bcrypt('12345') ],
            ['name' => 'M23', 'password' =>  bcrypt('12345') ],
            ['name' => 'M24', 'password' =>  bcrypt('12345') ],
            ['name' => 'M25', 'password' =>  bcrypt('12345') ],
            ['name' => 'M26', 'password' =>  bcrypt('12345') ],
            ['name' => 'M27', 'password' =>  bcrypt('12345') ],
            ['name' => 'M28', 'password' =>  bcrypt('12345') ],
            ['name' => 'M29', 'password' =>  bcrypt('12345') ],
            ['name' => 'M30', 'password' =>  bcrypt('12345') ]
        ]);
    }
}
