<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Information</title>
    <style>
        /* Root CSS Variables for Colors */
        :root {
            --primary-color: #4CAF50;
            --secondary-color: #333;
            --accent-color: #f1f1f1;
            --hover-color: #ddd;
            --background-color: #f9fafb;
            --table-header-bg: #4CAF50;
            --table-row-bg: #ffffff;
            --table-row-alt-bg: #fafafa;
            --table-border-color: #ddd;
            --shadow-light: rgba(0, 0, 0, 0.1);
            --button-border-color: #4CAF50;
        }

        /* Global Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: var(--background-color);
            color: var(--secondary-color);
        }

        /* Container for Header Section */
        .header-container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #ffffff;
            box-shadow: 0 4px 10px var(--shadow-light);
            border-radius: 8px;
        }

        /* Title Styling */
        .title {
            font-size: 2rem;
            color: var(--primary-color);
            text-transform: uppercase;
            letter-spacing: 2px;
            margin: 0;
        }

        /* Add Button Styling */
        .add-btn {
            padding: 10px 20px;
            font-size: 1rem;
            background-color: var(--primary-color);
            color: white;
            border: 2px solid var(--primary-color);
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            font-weight: 600;
            text-decoration: none;
        }

        .add-btn:hover {
            background-color: darkgreen;
            border-color: darkgreen;
        }

        /* Success alert */
        .alert-success {
            background-color: rgba(76, 175, 80, 0.15);
            color: var(--primary-color);
            padding: 15px 20px;
            border: 2px solid var(--primary-color);
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 10px;
            max-width: 600px;
            margin: 20px auto;
            box-shadow: 0 4px 10px var(--shadow-light);
            position: relative;
        }

        .alert-success .alert-icon {
            font-size: 1.2rem;
            color: var(--primary-color);
        }

        .alert-success .close-btn {
            background: none;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
            border-radius: 50%;
            font-size: 1.2rem;
            cursor: pointer;
            padding: 2px 6px;
            margin-left: auto;
            transition: background-color 0.2s, color 0.2s;
        }

        .alert-success .close-btn:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .deleted {
            background-color: #ad5248;
            color: #f1f1f1;
        }


        /* Container for Centered Content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0 4px 10px var(--shadow-light);
            background-color: var(--table-row-bg);
            border-radius: 8px;
            overflow: hidden;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: var(--table-header-bg);
            color: #ffffff;
            font-weight: 600;
        }

        td {
            background-color: var(--table-row-bg);
            border-bottom: 1px solid var(--table-border-color);
        }

        tr:nth-child(even) td {
            background-color: var(--table-row-alt-bg);
        }

        tr:hover td {
            background-color: var(--hover-color);
        }

        .table-container {
            overflow-x: auto;
            margin-top: 20px;
        }

        /* Action Buttons (View, Edit, Delete) */
        .action-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 10px;
        }

        /* General Button Styling */
        .action-btn {
            padding: 10px 20px;
            font-size: 1rem;
            font-weight: 600;
            text-align: center;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s, border-color 0.3s;
            display: inline-block;
            border: 2px solid transparent;
        }

        /* View Button */
        .view-btn {
            background-color: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        .view-btn:hover {
            background-color: darkgreen;
            border-color: darkgreen;
        }

        /* Edit Button */
        .edit-btn {
            background-color: #f1c40f;
            /* Yellow for Edit */
            color: white;
            border-color: #f1c40f;
        }

        .edit-btn:hover {
            background-color: #f39c12;
            border-color: #f39c12;
        }

        /* Delete Button */
        .delete-btn {
            background-color: #e74c3c;
            color: white;
            border-color: #e74c3c;
        }

        .delete-btn:hover {
            background-color: #c0392b;
            border-color: #c0392b;
        }

        .action-btn:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .action-btn:active {
            background-color: #333;
        }

        .w-5,
        .h-5 {
            width: 20px;
            height: 20px;
            color: var(--primary-color);
            border-radius: 4px;
            transition: 0.3s ease;
        }

        .w-5:hover,
        .h-5:hover {
            color: white;
            background-color: var(--primary-color);
        }


        /* Responsive Design */
        @media (max-width: 768px) {

            table,
            th,
            td {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            .header-container {
                flex-direction: column;
                align-items: flex-start;
                text-align: center;
            }

            .add-btn {
                width: 100%;
                margin-top: 10px;
            }

            th,
            td {
                padding: 8px;
            }

            h1 {
                font-size: 1.5rem;
            }

            table {
                font-size: 0.85rem;
            }
        }

        /* Scrollbar Styling */
        .table-container::-webkit-scrollbar {
            width: 8px;
        }

        .table-container::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 4px;
        }

        .table-container::-webkit-scrollbar-thumb:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    {{-- {{print_r(session()->all())}} --}}
    <div class="header-container">
        <h1 class="title">Student Information</h1>
        {{-- <button class="add-btn">Add Student</button> --}}
        <a href="/create " class="add-btn">Add Student</a>
    </div>
    {{-- Alert --}}
    @if (session('success'))
    <div class="alert-success">
        <span class="alert-icon">✓</span>
        <span>{{ session('success') }}</span>
        <button class="close-btn" onclick="this.parentElement.style.display='none';">&times;</button>
    </div>
    @endif
    {{--Deleted Alert --}}
    @if (session('deleted'))
    <div class="alert-success deleted">
        <span class="alert-icon">✓</span>
        <span>{{ session('deleted') }}</span>
        <button class="close-btn" onclick="this.parentElement.style.display='none';">&times;</button>
    </div>
    @endif
    {{--Edited Alert --}}
    @if (session('edited'))
    <div class="alert-success">
        <span class="alert-icon">✓</span>
        <span>{{ session('edited') }}</span>
        <button class="close-btn" onclick="this.parentElement.style.display='none';">&times;</button>
    </div>
    @endif

    <div class="container">

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $loop->iteration + (($students->currentPage() - 1) * $students->perPage()) }}</td>
                        {{-- <td>{{ $loop->iteration }}</td> --}}
                        <td>{{ ucwords($student->name) }}</td>
                        <td>{{ $student->gender }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>
                            <div class="action-links">
                                <a href="/index/{{ $student->id }}" class="action-btn view-btn">View</a>

                                <a href="/edit/{{ $student->id }}" class="action-btn edit-btn">Edit</a>

                                <form action="/index/{{ $student->id }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="action-btn delete-btn">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        {{$students->links()}}
    </div>
</body>

</html>