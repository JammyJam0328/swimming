<?php 
    include('./db.php');
    $to_report_id = $_REQUEST['id'];

    $sql = "SELECT * FROM tbl_runpart WHERE r_id = '$to_report_id' and run_time != 'Null' ORDER BY run_time ASC";

  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./tailwind.css">
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
</head>

<body>
    <div class="m-3">
        <div class="flex justify-center">
            <span class="text-xl font-bold"> Ranking of Participants</span>
        </div>
        <div class="mt-10">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="-my-2  sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase ">
                                            Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase ">
                                            Lane Number
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase ">
                                            Time
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php 
                                          if ($query = $conn->query($sql)) {
                                                while($row = $query->fetch(PDO::FETCH_ASSOC)){
                                                ?>
                                    <tr>
                                        <td
                                            class="text-center px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            <?php echo $row['part_name'] ?>
                                        </td>
                                        <td class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <?php echo $row['lane_number'] ?>
                                        </td>
                                        <td class="text-center px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <?php echo $row['run_time'] ?>

                                        </td>
                                    </tr>


                                    <?php
                                                }
                                            }
                                    ?>

                                    <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <div class="flex space-x-3 text-sm">
                    <label for="prepared">Prepared By : </label>
                    <input type="text" class="outline-none focus:outline-none border-b border-black w-72 text-center">
                </div>
            </div>

        </div>
    </div>
    <script>
    alert("To Print or Save the File \n Right click and select 'Print'")

    window.addEventListener("keyup", function(e) {
        if (e.key == "Escape") {
            location.href = "track-and-field.php";
        }
    });
    </script>
</body>

</html>