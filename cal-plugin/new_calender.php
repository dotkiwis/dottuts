<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>


<body>

    <div class="container">


        <table class="table-bordered ">


            <tr>
                <th colspan="1">
                    <a href="#" id="page-left" onclick="prevMonth()"><i class="fa fa-arrow-left"></i></a>
                </th>

                <th colspan="6">
                    <span class="calendarSavingState" style="display: none;">
                        <i class="booked-icon booked-icon-spinner-clock booked-icon-spin"></i>
                    </span>
                    <span class="monthName">
                        <h3 id="monthYear"></h3>
                    </span>
                </th>
                <th colspan="1">
                    <a href="#" id="page-right" onclick="nextMonth()"><i class="fa fa-arrow-right"></i></a>
                </th>
            </tr>
            <tr>
                <th>Sat</th>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
            </tr>
        </table>

        <table id="cable" class="table-bordered ">

        </table>

        <div id="appoint-list">
            <h1 id="dno"></h1>
            <ul class="list-group">
                <li class="list-group-item">10AM - 11AM<button id="s1" onclick="popup(this,'s1')" data-toggle="modal"
                        data-target="#exampleModal" type="button" class="button7 ">Book Appointment</button></li>
                <li class="list-group-item">11AM - 12PM <button id="s2" onclick="popup(this,'s2')" data-toggle="modal"
                        data-target="#exampleModal" type="button" class="button7 ">Book Appointment</button></li>
                <!--<li class="list-group-item">Lunch </li>-->
                <li class="list-group-item">2PM - 3PM <button id="s3" onclick="popup(this,'s3')" data-toggle="modal"
                        data-target="#exampleModal" type="button" class="button7">Book Appointment</button></li>
                <li class="list-group-item">3PM - 4PM <button id="s4" onclick="popup(this,'s4')" data-toggle="modal"
                        data-target="#exampleModal" type="button" class="button7 ">Book Appointment</button></li>
            </ul>
        </div>
        <div>
            <p id="demo"></p>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="titl">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label>Name* </label>
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Mobile*</label>
                            <input type="text" class="form-control" id="mob" placeholder="Mobile">
                        </div>
                        <div class="form-group">
                            <label>E-mail*</label>
                            <input type="email" class="form-control" id="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <label>Meeting Person*</label>
                            <select class="form-control" id="person" placeholder="SelectPerson">
                                <option value="">Select Person</option>

                                <option value="Mrs.Vidya">Mrs.Vidya</option>

                                <option value="Mr.Vishnuvaigundavasan">Mr.Vishnuvaigundavasan</option>

                                <option value="Mr.Shanmugam">Mr.Shanmugam</option>

                                <option value="Mr.Amarnath">Mr.Amarnath</option>

                                <option value="Mrs.Dhamayanthi">Mrs.Dhamayanthi</option>

                                <option value="Mr.Gnanajanathan M S">Mr.Gnanajanathan M S</option>

                                <option value="Mr.Hariprasaadh A R">Mr.Hariprasaadh A R</option>

                            </select>

                        </div>
                        <div class="form-group">
                            <label>Meeting Place*</label>
                            <select class="form-control" id="place" placeholder="SelectPlace">
                                <option value="">Select Place</option>

                                <option value="Pollachi">Pollachi</option>

                                <option value="Coimbatore">Coimbatore</option>

                            </select>

                        </div>
                        <div class="form-group">
                            <label>Message*</label>
                            <input type="text" class="form-control" id="message" placeholder="comments">
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="apply()" data-dismiss="modal" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </div>
    </div>
    <script language="javascript">
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];

        var getDaysInMonth = function (month, year) {
            console.log(month, year)
            return new Date(year, month, 0).getDate();
        };


        function range(start, end) {
            return (new Array(end - start + 1)).fill(undefined).map((_, i) => i + start);
        }

        function nextMonth() {
            if (currentMonth === 11) {
                currentMonth = 0;
                currentYear += 1;
            } else {
                currentMonth += 1;
            }
            myFunction();
        }

        function prevMonth() {
            if (currentMonth === 0) {
                currentMonth = 11;
                currentYear -= 1;
            } else {
                currentMonth -= 1;
            }
            myFunction();
        }

        const todayDate = new Date();
        const actualCurrentMonth = todayDate.getMonth();
        const actualCurrentYear = todayDate.getFullYear();

        let currentMonth = todayDate.getMonth();
        let currentYear = todayDate.getFullYear();

        function myFunction() {
            console.log("currentMonth : " + currentMonth, actualCurrentMonth)
            if (actualCurrentMonth == currentMonth && actualCurrentYear == currentYear) {
                document.getElementById("page-left").onclick = null;
            } else {
                document.getElementById("page-left").onclick = prevMonth;
            }

            document.getElementById("monthYear").innerHTML = monthNames[currentMonth] + " " + currentYear;

            var table = document.getElementById("cable");
            table.innerHTML = "";
            let b = 0;

            var monthDays = getDaysInMonth(parseInt(currentMonth) + 1, 2019);
            console.log("monthDays : " + monthDays);

            var a = range(1, monthDays);
            console.log(a)


            for (i = 0; i < a.length / 7; i++) {
                var row = table.insertRow(i);
                for (j = 0; j < 7; j++) {
                    // console.log("i", i, "j", j, "i+j", i + j, "b", b)
                    if (a[i + j + b] != undefined) {
                        var cell1 = row.insertCell(j);
                        var x = document.createElement("span");
                        x.className = 'numberCircle';
                        x.innerHTML = a[i + j + b];
                        cell1.append(x);
                        cell1.onclick = function () {
                            getval(this);
                        };
                    }
                }
                b += 6;

            }
        }
        var values = [];
        var date;

        var bookings = [];

        function getval(cel) {
            console.log(cel);
            date = cel.getElementsByTagName('span')[0].innerHTML;
            let fullDate = "2019-" + (parseInt(currentMonth) + 1) + "-" + date;

            getDaySlots({
                date: fullDate
            });

            console.log(date);

            values.push(cel.innerHTML);
            var x = document.getElementById("dno");

            console.log(x)

            x.innerHTML = cel.innerHTML;
        }
        var gslot;
        var gcurrent;

        function popup(current, slot) {
            var cbl = document.getElementById("titl");
            gcurrent = current;
            cbl.innerHTML = " Avaliable Appointments On" + " " + date + " " + slot + "Slot";
            gslot = slot;
            console.log(date, slot);
        }

        function apply() {

            var ipname = document.getElementById("name").value;
            var ipmob = document.getElementById("mob").value;
            var ipemail = document.getElementById("email").value;
            var ipmessage = document.getElementById("message").value;
            var ipperson = document.getElementById("person").value;
            var ipplace = document.getElementById("place").value;




            console.log(date, gslot, ipname, ipmob, ipemail, ipmessage, ipperson, ipplace);
            let fullDate = "2019-" + (parseInt(currentMonth) + 1) + "-" + date;
            console.log(fullDate)

            addAppoint({
                date: fullDate,
                slot: gslot,
                name: ipname,
                mobile: ipmob,
                email: ipemail,
                message: ipmessage
            });

            document.getElementById("name").value = "";
            document.getElementById("mob").value = "";
            document.getElementById("email").value = "";
            document.getElementById("message").value = "";
            document.getElementById("person").value = "";
            document.getElementById("place").value = "";

            gcurrent.disabled = true;

            if (gslot === 's1') {
                bookings[0] = true;
            } else if (gslot === 's2') {
                bookings[1] = true;
            } else if (gslot === 's3') {
                bookings[2] = true;
            } else if (gslot === 's4') {
                bookings[3] = true;
            }

        }

        function addAppoint(oswa) {
            console.log(oswa)
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo").innerHTML = ""; //this.response;
                }
            };
            xhttp.open("POST", "http://127.0.0.1/db/add_new_appointment.php", true);
            xhttp.setRequestHeader("Content-Type", "application/json");

            xhttp.send(JSON.stringify(oswa));
        }

        function getDaySlots(data) {
            console.log(data)
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("demo").innerHTML = ""; //this.response;
                    bookings = JSON.parse(this.response);
                    console.log(bookings);
                    document.getElementById('s1').disabled = bookings[0];
                    document.getElementById('s2').disabled = bookings[1];
                    document.getElementById('s3').disabled = bookings[2];
                    document.getElementById('s4').disabled = bookings[3];
                }
            };
            xhttp.open("POST", "http://127.0.0.1/db/get_available_slots.php", true);
            xhttp.setRequestHeader("Content-Type", "application/json");

            xhttp.send(JSON.stringify(data));
        }


        // A $( document ).ready() block.
        $(document).ready(function () {
            var d = new Date();
            var n = d.getMonth();

            myFunction();
        });
    </script>

</body>

</html>