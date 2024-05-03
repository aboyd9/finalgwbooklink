<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Class Notes - GW BookLink</title>
    <link rel="stylesheet" href="style.css"> <!-- Ensure this file includes additional styles if needed -->
    
    <style>
        
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #fffaf0;
            margin: 0.5in;
            padding: 0.5in;
        }
        main {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-container {
            position: relative; /* Set position for absolute positioning of search button */
            background-color: #f0f0f0;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .search-button {
            position: absolute; /* Position search button top right corner */
            top: 10px;
            right: 10px;
            padding: 5px 10px;
            background-color: #666;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .search-button:hover {
            background-color: #777;
        }
        input[type="text"], input[type="file"], textarea, input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box; /* Fixes padding and border issues */
        }
   .form-container, .search-container {
            flex: 1 1 48%; /* Adjust to less than 50% for spacing */
            background-color: #f0f0f0;
            border-radius: 8px;
            padding: 20px;
            margin: 1%; /* Small margin to ensure space between them */
            box-sizing: border-box; /* Includes padding and border in the width */
        }
        .uploads-section {
    display: flex;
    flex-wrap: wrap; /* Allows items to wrap to the next line */
    justify-content: center; /* Centers items horizontally within the container */
    gap: 20px; /* Space between cards */
    background-color: #f0f0f0;
    padding: 20px;
    margin-top: 20px; /* Space above for clarity */
}

        input[type="text"], select, textarea, input[type="file"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box; /* Ensures that padding does not add to the width */
        }
        input[type="submit"] {
            background-color: #333;
            color: white;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #555;
        }
        .comments {
    margin-top: 10px;
    border-top: 1px solid #ccc;
    padding-top: 10px;
}
.comments {
    max-height: 150px;
    overflow-y: auto;  // Allow scrolling within the comments section
}


textarea {
    width: 100%;
    margin-top: 5px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 8px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

      .card {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 10px;
    margin-top: 10px;
    width: 250px; /* Set a fixed width */
    height: auto; /* Allow variable height */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between; /* Distributes space evenly */
    overflow: hidden; /* Keeps content within the card */
    max-height: 300px; /* Maximum height before scrolling */
    overflow-y: auto; /* Enable vertical scrolling */
}

.card img {
    width: 100%; /* Makes image take up the full card width */
    height: auto;
    max-height: 50%; /* Limits image height to half of the card */
}

.card div {
    text-align: center;
    width: 100%;
}

.comments {
    margin-top: 10px;
    border-top: 1px solid #ccc;
    padding-top: 10px;
}

textarea {
    width: 100%;
    margin-top: 5px;
    box-sizing: border-box; /* Includes padding in width calculation */
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 8px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}


button, a.button-link {
    padding: 8px 15px;
    border: none;
    background-color: #4CAF50; /* Green background for the view button */
    color: white;
    text-align: center;
    text-decoration: none;
    font-size: 14px;
    border-radius: 4px;
    cursor: pointer;
    flex-grow: 1; /* Allows buttons to expand and fill the container */
}

button:hover, a.button-link:hover {
    background-color: #45a049; /* Darker green on hover */
}
header, footer {
            text-align: center;
            background-color: #333;
            color: white;
            padding: 20px;
        }

.delete-button {
    background-color: #f44336; /* Red background for the delete button */
    margin-left: 10px; /* Adds space between buttons */
}

.delete-button:hover {
    background-color: #da190b; /* Darker red on hover */
}


    </style>
    
</head>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
</head>
<body>
    <h1 style="font-family: 'Montserrat', sans-serif;
            font-size: 50px; 
            text-align: center; 
            margin-top: 50px;"> GWU BookLink </h1>
<img src="logo2.jpg" alt="Logo" style="max-width: 200px; height: auto; position: absolute; top: 35px; left: 30px;">

                    
</div>
<body>

    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="buy_sell.php">Buy/Sell Books</a></li>
            <li><a href="ratings4.php">Rate my Professor</a></li>
            <li><a href="notes.php">Share Notes</a></li>
        </ul>
    </nav>
    <header>
        <h1>Share Class Notes</h1>
        <p>Search what classes you're struggling with and see if we have the resources for you to excel!</p>
    </header>
    <main>
   <?php foreach ($uploadsList as $upload): ?>
            <div class="note">
                <a href="<?= $uploadDir . htmlspecialchars($upload['filename']) ?>">
                    <?= htmlspecialchars($upload['className']) ?> - <?= htmlspecialchars($upload['classNumber']) ?>: <?= htmlspecialchars($upload['filename']) ?>
                </a>
                (Uploaded on <?= $upload['timestamp'] ?>)
                <form action="notes.php" method="post">
                    <input type="hidden" name="filename" value="<?= htmlspecialchars($upload['filename']) ?>">
                    <textarea name="comment" placeholder="Add a comment" required></textarea>
                    <button type="submit" name="submitComment">Post Comment</button>
                </form>
                <!-- Form to add a new comment -->
<form class="comment-form">
    <input type="hidden" name="filename" value="<?php echo $file['fileName']; ?>">
    <textarea name="comment" required placeholder="Add a comment..."></textarea>
    <button type="submit">Post Comment</button>
</form>

                <ul>
                    <?php 
                    // Load comments for this file
                    $commentsFilename = $uploadDir . $upload['filename'] . '_comments.txt';
                    if (file_exists($commentsFilename)) {
                        $comments = file($commentsFilename);
                        foreach ($comments as $comment) {
                            echo '<li>' . htmlspecialchars($comment) . '</li>';
                        }
                    }
                    ?>
                </ul>
            </div>
        <?php endforeach; ?>
        </main>
        

<section class="form-container">
    <h1>Upload Class Notes</h1>
    <form action="notes.php" method="post" enctype="multipart/form-data">
        <!-- Dropdown for Class Name -->
        <label for="className">Class Name:</label>
        <select name="className" id="className" required>
            <option value="">Select Class Name</option>
            <option value="Academy for Classical Acting (ACA)">Academy for Classical Acting (ACA)</option>
            <option value="Accountancy (ACCY)">Accountancy (ACCY)</option>
            <option value="Africana Studies (AFST)">Africana Studies (AFST)</option>
            <option value="American Studies (AMST)">American Studies (AMST)</option>
            <option value="Anatomy and Regenerative Biology (ANAT)">Anatomy and Regenerative Biology (ANAT)</option>
            <option value="Anthropology (ANTH)">Anthropology (ANTH)</option>
            <option value="Applied Science (APSC)">Applied Science (APSC)</option>
            <option value="Arabic (ARAB)">Arabic (ARAB)</option>
            <option value="Art Therapy (ARTH)">Art Therapy (ARTH)</option>
            <option value="Astronomy (ASTR)">Astronomy (ASTR)</option>
            <option value="Biochemistry (BIOC)">Biochemistry (BIOC)</option>
            <option value="Biological Sciences (BISC)">Biological Sciences (BISC)</option>
            <option value="Biomedical Engineering (BME)">Biomedical Engineering (BME)</option>
            <option value="Biomedical Sciences (BMSC)">Biomedical Sciences (BMSC)</option>
            <option value="Biostatistics (BIOS)">Biostatistics (BIOS)</option>
            <option value="Business Administration (BADM)">Business Administration (BADM)</option>
            <option value="Cancer Biology (CANC)">Cancer Biology (CANC)</option>
            <option value="Capital Markets (CAMA)">Capital Markets (CAMA)</option>
            <option value="Chemistry (CHEM)">Chemistry (CHEM)</option>
            <option value="Chinese (CHIN)">Chinese (CHIN)</option>
            <option value="Civil Engineering (CE)">Civil Engineering (CE)</option>
            <option value="Classical Studies (CLAS)">Classical Studies (CLAS)</option>
            <option value="Clinical Embryology and Reproductive Technology (CERT)">Clinical Embryology and Reproductive Technology (CERT)</option>
            <option value="Clinical Management and Leadership (CML)">Clinical Management and Leadership (CML)</option>
            <option value="Clinical Operations and Healthcare Management (COHM)">Clinical Operations and Healthcare Management (COHM)</option>
            <option value="Clinical Research Admin (CRA)">Clinical Research Admin (CRA)</option>
            <option value="Clinical Translational Science (CTS)">Clinical Translational Science (CTS)</option>
            <option value="College of Professional Studies (CPS)">College of Professional Studies (CPS)</option>
            <option value="Columbian College (CCAS)">Columbian College (CCAS)</option>
            <option value="Communication (COMM)">Communication (COMM)</option>
            <option value="Computer Science (CSCI)">Computer Science (CSCI)</option>
            <option value="Corcoran Art History (CAH)">Corcoran Art History (CAH)</option>
            <option value="Corcoran Decorative Arts and Design (CDAD)">Corcoran Decorative Arts and Design (CDAD)</option>
            <option value="Corcoran Exhibition Design (CEX)">Corcoran Exhibition Design (CEX)</option>
            <option value="Corcoran First Year Foundation (CFN)">Corcoran First Year Foundation (CFN)</option>
            <option value="Corcoran Graphic Design (CGD)">Corcoran Graphic Design (CGD)</option>
            <option value="Corcoran Interaction Design (CIXD)">Corcoran Interaction Design (CIXD)</option>
            <option value="Corcoran Interdisciplinary (CORX)">Corcoran Interdisciplinary (CORX)</option>
            <option value="Corcoran Interior Architecture (CIAR)">Corcoran Interior Architecture (CIAR)</option>
            <option value="Corcoran Museum Studies (CMST)">Corcoran Museum Studies (CMST)</option>
            <option value="Corcoran Music (CMUS)">Corcoran Music (CMUS)</option>
            <option value="Corcoran Photojournalism (CPJ)">Corcoran Photojournalism (CPJ)</option>
            <option value="Corcoran Studio Arts (CSA)">Corcoran Studio Arts (CSA)</option>
            <option value="Corcoran Theatre and Dance (CTAD)">Corcoran Theatre and Dance (CTAD)</option>
            <option value="Correctional Health Administration (CHA)">Correctional Health Administration (CHA)</option>
            <option value="Counseling (CNSL)">Counseling (CNSL)</option>
            <option value="Culinary Medicine (CULI)">Culinary Medicine (CULI)</option>
            <option value="Curriculum and Pedagogy (CPED)">Curriculum and Pedagogy (CPED)</option>
            <option value="Data Science (DATS)">Data Science (DATS)</option>
            <option value="Decision Sciences (DNSC)">Decision Sciences (DNSC)</option>
            <option value="East Asian Language and Literature (EALL)">East Asian Language and Literature (EALL)</option>
            <option value="Economics (ECON)">Economics (ECON)</option>
            <option value="Educational Leadership (EDUC)">Educational Leadership (EDUC)</option>
            <option value="Electrical and Computer Engineering (ECE)">Electrical and Computer Engineering (ECE)</option>
            <option value="Emergency Health Services (EHS)">Emergency Health Services (EHS)</option>
            <option value="Engineering Management and Systems Engineering (EMSE)">Engineering Management and Systems Engineering (EMSE)</option>
            <option value="English (ENGL)">English (ENGL)</option>
            <option value="English for Academic Purposes (EAP)">English for Academic Purposes (EAP)</option>
            <option value="Environmental Resource Policy (ENRP)">Environmental Resource Policy (ENRP)</option>
            <option value="Environmental Studies (ENVR)">Environmental Studies (ENVR)</option>
            <option value="Epidemiology (EPID)">Epidemiology (EPID)</option>
            <option value="Exercise and Nutrition Sciences (EXNS)">Exercise and Nutrition Sciences (EXNS)</option>
            <option value="Film Studies (FILM)">Film Studies (FILM)</option>
            <option value="Finance (FINA)">Finance (FINA)</option>
            <option value="Forensic Psychology (FORP)">Forensic Psychology (FORP)</option>
            <option value="Forensic Sciences (FORS)">Forensic Sciences (FORS)</option>
            <option value="French (FREN)">French (FREN)</option>
            <option value="Genomics and Bioinformatics (GENO)">Genomics and Bioinformatics (GENO)</option>
            <option value="Geography (GEOG)">Geography (GEOG)</option>
            <option value="Geology (GEOL)">Geology (GEOL)</option>
            <option value="Germanic Language and Literature (GER)">Germanic Language and Literature (GER)</option>
            <option value="Government Contracts (GCON)">Government Contracts (GCON)</option>
            <option value="Greek (GREK)">Greek (GREK)</option>
            <option value="GWTeach (GTCH)">GWTeach (GTCH)</option>
            <option value="Health and Wellness (HLWL)">Health and Wellness (HLWL)</option>
            <option value="Health Care Quality (HCQ)">Health Care Quality (HCQ)</option>
            <option value="Health Care Science (HCS)">Health Care Science (HCS)</option>
            <option value="Health Sciences Programs (HSCI)">Health Sciences Programs (HSCI)</option>
            <option value="Health Services Management and Leadership (HSML)">Health Services Management and Leadership (HSML)</option>
            <option value="Hebrew (HEBR)">Hebrew (HEBR)</option>
            <option value="History (HIST)">History (HIST)</option>
            <option value="Hominid Paleobiology (HOMP)">Hominid Paleobiology (HOMP)</option>
            <option value="Honors (HONR)">Honors (HONR)</option>
            <option value="Human Development (HDEV)">Human Development (HDEV)</option>
            <option value="Human Function and Rehabilitation (HFR)">Human Function and Rehabilitation (HFR)</option>
            <option value="Human Organizational Learning (HOL)">Human Organizational Learning (HOL)</option>
            <option value="Human Services and Social Justice (HSSJ)">Human Services and Social Justice (HSSJ)</option>
            <option value="Informatics (INFR)">Informatics (INFR)</
                        <option value="Informatics (INFR)">Informatics (INFR)</option>
            <option value="Information Systems Technology Management (ISTM)">Information Systems Technology Management (ISTM)</option>
            <option value="Integrative Medicine (INTM)">Integrative Medicine (INTM)</option>
            <option value="International Affairs (IAFF)">International Affairs (IAFF)</option>
            <option value="International Business (IBUS)">International Business (IBUS)</option>
            <option value="Italian (ITAL)">Italian (ITAL)</option>
            <option value="Japanese (JAPN)">Japanese (JAPN)</option>
            <option value="Judaic Studies (JSTD)">Judaic Studies (JSTD)</option>
            <option value="Korean (KOR)">Korean (KOR)</option>
            <option value="Latin (LATN)">Latin (LATN)</option>
            <option value="Leadership Education and Development (LEAD)">Leadership Education and Development (LEAD)</option>
            <option value="Legislative Affairs (LGAF)">Legislative Affairs (LGAF)</option>
            <option value="Lifestyle, Sport, and Physical Activity (LSPA)">Lifestyle, Sport, and Physical Activity (LSPA)</option>
            <option value="Linguistics (LING)">Linguistics (LING)</option>
            <option value="Management (MGT)">Management (MGT)</option>
            <option value="Marketing (MKTG)">Marketing (MKTG)</option>
            <option value="Master of Business Administration (MBAD)">Master of Business Administration (MBAD)</option>
            <option value="Mathematics (MATH)">Mathematics (MATH)</option>
            <option value="Mechanical and Aerospace Engineering (MAE)">Mechanical and Aerospace Engineering (MAE)</option>
            <option value="Medical Laboratory Science (MLS)">Medical Laboratory Science (MLS)</option>
            <option value="Microbiology, Immunology, and Tropical Medicine (MICR)">Microbiology, Immunology, and Tropical Medicine (MICR)</option>
            <option value="Molecular Medicine (MMED)">Molecular Medicine (MMED)</option>
            <option value="Naval Science (NSC)">Naval Science (NSC)</option>
            <option value="Neuroscience (NRSC)">Neuroscience (NRSC)</option>
            <option value="Nursing (NURS)">Nursing (NURS)</option>
            <option value="Occupational Therapy (OT)">Occupational Therapy (OT)</option>
            <option value="Organizational Sciences (ORSC)">Organizational Sciences (ORSC)</option>
            <option value="Patent Practice (PATN)">Patent Practice (PATN)</option>
            <option value="Peace Studies (PSTD)">Peace Studies (PSTD)</option>
            <option value="Persian (PERS)">Persian (PERS)</option>
            <option value="Pharmacogenomics (PHRG)">Pharmacogenomics (PHRG)</option>
            <option value="Pharmacology (PHAR)">Pharmacology (PHAR)</option>
            <option value="Philosophy (PHIL)">Philosophy (PHIL)</option>
            <option value="Physical Therapy (PT)">Physical Therapy (PT)</option>
            <option value="Physician Assistant (PA)">Physician Assistant (PA)</option>
            <option value="Physics (PHYS)">Physics (PHYS)</option>
            <option value="Physiology (PHYL)">Physiology (PHYL)</option>
            <option value="Political Management (PMGT)">Political Management (PMGT)</option>
            <option value="Political Psychology (PPSY)">Political Psychology (PPSY)</option>
            <option value="Political Science (PSC)">Political Science (PSC)</option>
            <option value="Portuguese (PORT)">Portuguese (PORT)</option>
            <option value="Professional Psychology (PSYD)">Professional Psychology (PSYD)</option>
            <option value="Professional Studies Security and Safety Leadership (PSSL)">Professional Studies Security and Safety Leadership (PSSL)</option>
            <option value="Professional Studies-Advocacy Global Environment (PSAD)">Professional Studies-Advocacy Global Environment (PSAD)</option>
            <option value="Professional Studies-Cybersecurity Strategy and Information Management (PSCS)">Professional Studies-Cybersecurity Strategy and Information Management (PSCS)</option>
            <option value="Professional Studies-Healthcare Corporate Compliance (PSHC)">Professional Studies-Healthcare Corporate Compliance (PSHC)</option>
</select>


        <input type="text" name="classNumber" placeholder="Class Number" required>
        <input type="file" name="notesFile" required>
        <textarea name="description" placeholder="Description" required></textarea>
        <input type="submit" value="Upload Notes" name="uploadNotes">
    </form>
</section>

<body>
    <div class="search-container">
    <h1>Search Class Notes</h1>
    <form action="notes.php" method="get">
        <!-- Dropdown for Class Name -->
        <label for="searchClassName">Class Name:</label>
        <select name="searchClassName" id="searchClassName">
            <option value="">Select Class Name</option>
            <option value="Academy for Classical Acting (ACA)">Academy for Classical Acting (ACA)</option>
            <option value="Accountancy (ACCY)">Accountancy (ACCY)</option>
            <option value="Africana Studies (AFST)">Africana Studies (AFST)</option>
            <option value="American Studies (AMST)">American Studies (AMST)</option>
            <option value="Anatomy and Regenerative Biology (ANAT)">Anatomy and Regenerative Biology (ANAT)</option>
            <option value="Anthropology (ANTH)">Anthropology (ANTH)</option>
            <option value="Applied Science (APSC)">Applied Science (APSC)</option>
            <option value="Arabic (ARAB)">Arabic (ARAB)</option>
            <option value="Art Therapy (ARTH)">Art Therapy (ARTH)</option>
            <option value="Astronomy (ASTR)">Astronomy (ASTR)</option>
            <option value="Biochemistry (BIOC)">Biochemistry (BIOC)</option>
            <option value="Biological Sciences (BISC)">Biological Sciences (BISC)</option>
            <option value="Biomedical Engineering (BME)">Biomedical Engineering (BME)</option>
            <option value="Biomedical Sciences (BMSC)">Biomedical Sciences (BMSC)</option>
            <option value="Biostatistics (BIOS)">Biostatistics (BIOS)</option>
            <option value="Business Administration (BADM)">Business Administration (BADM)</option>
            <option value="Cancer Biology (CANC)">Cancer Biology (CANC)</option>
            <option value="Capital Markets (CAMA)">Capital Markets (CAMA)</option>
            <option value="Chemistry (CHEM)">Chemistry (CHEM)</option>
            <option value="Chinese (CHIN)">Chinese (CHIN)</option>
            <option value="Civil Engineering (CE)">Civil Engineering (CE)</option>
            <option value="Classical Studies (CLAS)">Classical Studies (CLAS)</option>
            <option value="Clinical Embryology and Reproductive Technology (CERT)">Clinical Embryology and Reproductive Technology (CERT)</option>
            <option value="Clinical Management and Leadership (CML)">Clinical Management and Leadership (CML)</option>
            <option value="Clinical Operations and Healthcare Management (COHM)">Clinical Operations and Healthcare Management (COHM)</option>
            <option value="Clinical Research Admin (CRA)">Clinical Research Admin (CRA)</option>
            <option value="Clinical Translational Science (CTS)">Clinical Translational Science (CTS)</option>
            <option value="College of Professional Studies (CPS)">College of Professional Studies (CPS)</option>
            <option value="Columbian College (CCAS)">Columbian College (CCAS)</option>
            <option value="Communication (COMM)">Communication (COMM)</option>
            <option value="Computer Science (CSCI)">Computer Science (CSCI)</option>
            <option value="Corcoran Art History (CAH)">Corcoran Art History (CAH)</option>
            <option value="Corcoran Decorative Arts and Design (CDAD)">Corcoran Decorative Arts and Design (CDAD)</option>
            <option value="Corcoran Exhibition Design (CEX)">Corcoran Exhibition Design (CEX)</option>
            <option value="Corcoran First Year Foundation (CFN)">Corcoran First Year Foundation (CFN)</option>
            <option value="Corcoran Graphic Design (CGD)">Corcoran Graphic Design (CGD)</option>
            <option value="Corcoran Interaction Design (CIXD)">Corcoran Interaction Design (CIXD)</option>
            <option value="Corcoran Interdisciplinary (CORX)">Corcoran Interdisciplinary (CORX)</option>
            <option value="Corcoran Interior Architecture (CIAR)">Corcoran Interior Architecture (CIAR)</option>
            <option value="Corcoran Museum Studies (CMST)">Corcoran Museum Studies (CMST)</option>
            <option value="Corcoran Music (CMUS)">Corcoran Music (CMUS)</option>
            <option value="Corcoran Photojournalism (CPJ)">Corcoran Photojournalism (CPJ)</option>
            <option value="Corcoran Studio Arts (CSA)">Corcoran Studio Arts (CSA)</option>
            <option value="Corcoran Theatre and Dance (CTAD)">Corcoran Theatre and Dance (CTAD)</option>
            <option value="Correctional Health Administration (CHA)">Correctional Health Administration (CHA)</option>
            <option value="Counseling (CNSL)">Counseling (CNSL)</option>
            <option value="Culinary Medicine (CULI)">Culinary Medicine (CULI)</option>
            <option value="Curriculum and Pedagogy (CPED)">Curriculum and Pedagogy (CPED)</option>
            <option value="Data Science (DATS)">Data Science (DATS)</option>
            <option value="Decision Sciences (DNSC)">Decision Sciences (DNSC)</option>
            <option value="East Asian Language and Literature (EALL)">East Asian Language and Literature (EALL)</option>
            <option value="Economics (ECON)">Economics (ECON)</option>
            <option value="Educational Leadership (EDUC)">Educational Leadership (EDUC)</option>
            <option value="Electrical and Computer Engineering (ECE)">Electrical and Computer Engineering (ECE)</option>
            <option value="Emergency Health Services (EHS)">Emergency Health Services (EHS)</option>
            <option value="Engineering Management and Systems Engineering (EMSE)">Engineering Management and Systems Engineering (EMSE)</option>
            <option value="English (ENGL)">English (ENGL)</option>
            <option value="English for Academic Purposes (EAP)">English for Academic Purposes (EAP)</option>
            <option value="Environmental Resource Policy (ENRP)">Environmental Resource Policy (ENRP)</option>
            <option value="Environmental Studies (ENVR)">Environmental Studies (ENVR)</option>
            <option value="Epidemiology (EPID)">Epidemiology (EPID)</option>
            <option value="Exercise and Nutrition Sciences (EXNS)">Exercise and Nutrition Sciences (EXNS)</option>
            <option value="Film Studies (FILM)">Film Studies (FILM)</option>
            <option value="Finance (FINA)">Finance (FINA)</option>
            <option value="Forensic Psychology (FORP)">Forensic Psychology (FORP)</option>
            <option value="Forensic Sciences (FORS)">Forensic Sciences (FORS)</option>
            <option value="French (FREN)">French (FREN)</option>
            <option value="Genomics and Bioinformatics (GENO)">Genomics and Bioinformatics (GENO)</option>
            <option value="Geography (GEOG)">Geography (GEOG)</option>
            <option value="Geology (GEOL)">Geology (GEOL)</option>
            <option value="Germanic Language and Literature (GER)">Germanic Language and Literature (GER)</option>
            <option value="Government Contracts (GCON)">Government Contracts (GCON)</option>
            <option value="Greek (GREK)">Greek (GREK)</option>
            <option value="GWTeach (GTCH)">GWTeach (GTCH)</option>
            <option value="Health and Wellness (HLWL)">Health and Wellness (HLWL)</option>
            <option value="Health Care Quality (HCQ)">Health Care Quality (HCQ)</option>
            <option value="Health Care Science (HCS)">Health Care Science (HCS)</option>
            <option value="Health Sciences Programs (HSCI)">Health Sciences Programs (HSCI)</option>
            <option value="Health Services Management and Leadership (HSML)">Health Services Management and Leadership (HSML)</option>
            <option value="Hebrew (HEBR)">Hebrew (HEBR)</option>
            <option value="History (HIST)">History (HIST)</option>
            <option value="Hominid Paleobiology (HOMP)">Hominid Paleobiology (HOMP)</option>
            <option value="Honors (HONR)">Honors (HONR)</option>
            <option value="Human Development (HDEV)">Human Development (HDEV)</option>
            <option value="Human Function and Rehabilitation (HFR)">Human Function and Rehabilitation (HFR)</option>
            <option value="Human Organizational Learning (HOL)">Human Organizational Learning (HOL)</option>
            <option value="Human Services and Social Justice (HSSJ)">Human Services and Social Justice (HSSJ)</option>
            <option value="Informatics (INFR)">Informatics (INFR)</
                        <option value="Informatics (INFR)">Informatics (INFR)</option>
            <option value="Information Systems Technology Management (ISTM)">Information Systems Technology Management (ISTM)</option>
            <option value="Integrative Medicine (INTM)">Integrative Medicine (INTM)</option>
            <option value="International Affairs (IAFF)">International Affairs (IAFF)</option>
            <option value="International Business (IBUS)">International Business (IBUS)</option>
            <option value="Italian (ITAL)">Italian (ITAL)</option>
            <option value="Japanese (JAPN)">Japanese (JAPN)</option>
            <option value="Judaic Studies (JSTD)">Judaic Studies (JSTD)</option>
            <option value="Korean (KOR)">Korean (KOR)</option>
            <option value="Latin (LATN)">Latin (LATN)</option>
            <option value="Leadership Education and Development (LEAD)">Leadership Education and Development (LEAD)</option>
            <option value="Legislative Affairs (LGAF)">Legislative Affairs (LGAF)</option>
            <option value="Lifestyle, Sport, and Physical Activity (LSPA)">Lifestyle, Sport, and Physical Activity (LSPA)</option>
            <option value="Linguistics (LING)">Linguistics (LING)</option>
            <option value="Management (MGT)">Management (MGT)</option>
            <option value="Marketing (MKTG)">Marketing (MKTG)</option>
            <option value="Master of Business Administration (MBAD)">Master of Business Administration (MBAD)</option>
            <option value="Mathematics (MATH)">Mathematics (MATH)</option>
            <option value="Mechanical and Aerospace Engineering (MAE)">Mechanical and Aerospace Engineering (MAE)</option>
            <option value="Medical Laboratory Science (MLS)">Medical Laboratory Science (MLS)</option>
            <option value="Microbiology, Immunology, and Tropical Medicine (MICR)">Microbiology, Immunology, and Tropical Medicine (MICR)</option>
            <option value="Molecular Medicine (MMED)">Molecular Medicine (MMED)</option>
            <option value="Naval Science (NSC)">Naval Science (NSC)</option>
            <option value="Neuroscience (NRSC)">Neuroscience (NRSC)</option>
            <option value="Nursing (NURS)">Nursing (NURS)</option>
            <option value="Occupational Therapy (OT)">Occupational Therapy (OT)</option>
            <option value="Organizational Sciences (ORSC)">Organizational Sciences (ORSC)</option>
            <option value="Patent Practice (PATN)">Patent Practice (PATN)</option>
            <option value="Peace Studies (PSTD)">Peace Studies (PSTD)</option>
            <option value="Persian (PERS)">Persian (PERS)</option>
            <option value="Pharmacogenomics (PHRG)">Pharmacogenomics (PHRG)</option>
            <option value="Pharmacology (PHAR)">Pharmacology (PHAR)</option>
            <option value="Philosophy (PHIL)">Philosophy (PHIL)</option>
            <option value="Physical Therapy (PT)">Physical Therapy (PT)</option>
            <option value="Physician Assistant (PA)">Physician Assistant (PA)</option>
            <option value="Physics (PHYS)">Physics (PHYS)</option>
            <option value="Physiology (PHYL)">Physiology (PHYL)</option>
            <option value="Political Management (PMGT)">Political Management (PMGT)</option>
            <option value="Political Psychology (PPSY)">Political Psychology (PPSY)</option>
            <option value="Political Science (PSC)">Political Science (PSC)</option>
            <option value="Portuguese (PORT)">Portuguese (PORT)</option>
            <option value="Professional Psychology (PSYD)">Professional Psychology (PSYD)</option>
            <option value="Professional Studies Security and Safety Leadership (PSSL)">Professional Studies Security and Safety Leadership (PSSL)</option>
            <option value="Professional Studies-Advocacy Global Environment (PSAD)">Professional Studies-Advocacy Global Environment (PSAD)</option>
            <option value="Professional Studies-Cybersecurity Strategy and Information Management (PSCS)">Professional Studies-Cybersecurity Strategy and Information Management (PSCS)</option>
            <option value="Professional Studies-Healthcare Corporate Compliance (PSHC)">Professional Studies-Healthcare Corporate Compliance (PSHC)</option>
</select>
        <input type="text" name="classNumber" placeholder="Enter Class Number">
        <input type="submit" value="Search">
    </form>
</div>
<?php
$uploadDir = '/home/gclf3pkxhlxh/public_html/uploads
'; // Define the directory path where files are stored
$metadataPath = $uploadDir . 'metadata.txt';

// Function to read metadata from the 'metadat.txt' file
function readMetadata($filename) {
    $uploadsList = [];
    if (file_exists($filename)) {
        $file = fopen($filename, "r");
        while (($line = fgets($file)) !== false) {
            $parts = explode(',', $line);
            if (count($parts) >= 4) {
                $uploadsList[] = [
                    'className' => trim($parts[0]),
                    'classNumber' => trim($parts[1]),
                    'filename' => trim($parts[2]),
                    'timestamp' => trim($parts[3])
                ];
            }
        }
        fclose($file);
    }
    return $uploadsList;
}

$uploadsList = readMetadata($metadataPath);

// Handle search
$filteredUploads = $uploadsList; // Default to showing all if no search parameters are given
if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
    $searchClassName = isset($_GET['searchClassName']) ? $_GET['searchClassName'] : "";
    $classNumber = isset($_GET['classNumber']) ? $_GET['classNumber'] : "";

    $filteredUploads = array_filter($uploadsList, function($upload) use ($searchClassName, $classNumber) {
        $matchClassName = empty($searchClassName) || stripos($upload['className'], $searchClassName) !== false;
        $matchClassNumber = empty($classNumber) || stripos($upload['classNumber'], $classNumber) !== false;
        return $matchClassName && $matchClassNumber;
    });
}
?>
<?php
// Load and decode the JSON metadata file
$uploadsList = json_decode(file_get_contents('uploads_metadata.json'), true) ?? [];
$filteredUploads = []; // Initialize filtered results as empty

// Handle search
if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
    $searchClassName = $_GET['searchClassName'] ?? "";
    $classNumber = $_GET['classNumber'] ?? "";

    $filteredUploads = array_filter($uploadsList, function($upload) use ($searchClassName, $classNumber) {
        $matchClassName = empty($searchClassName) || stripos($upload['className'], $searchClassName) !== false;
        $matchClassNumber = empty($classNumber) || stripos($upload['classNumber'], $classNumber) !== false;
        return $matchClassName && $matchClassNumber;
    });
} else {
    // If no search parameters are provided, display nothing or handle as needed
    $filteredUploads = [];
}

?>

<main>
    
    <?php if (!empty($filteredUploads)): ?>
        <div class="uploads-section">
            <?php foreach ($filteredUploads as $upload): ?>
                <div class="card">
                    <img src="stock.jpeg" alt="Default Thumbnail" style="width:100%; height:auto;"> <!-- Default thumbnail image -->
                    <div>
                        <p><strong>Class:</strong> <?= htmlspecialchars($upload['className']) . ' ' . htmlspecialchars($upload['classNumber']) ?></p>
                        <p><strong>Description:</strong> <?= htmlspecialchars($upload['description']) ?></p>
                        <p><a href="<?= htmlspecialchars($upload['fileName']) ?>" target="_blank">View File</a></p>
                        <form action="notes.php" method="post">
                            <input type="hidden" name="filenameToDelete" value="<?= htmlspecialchars($upload['fileName']) ?>">
                            <button type="submit" name="deleteFile" class="delete-button">Delete</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p> </p>
    <?php endif; ?>




     
</main>


</body>

<section class="uploads-section">
    <h2>Recent Uploads</h2>
    <?php
    
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['deleteFile'])) {
    $filenameToDelete = $_POST['filenameToDelete'];

    // Delete the file from the server
    if (file_exists($uploadDirectory . $filenameToDelete)) {
        unlink($uploadDirectory . $filenameToDelete); // Remove the file from the directory
    }

    // Update the metadata file by removing the entry for the deleted file
    $uploads = json_decode(file_get_contents($metadataFile), true);
    $uploads = array_filter($uploads, function ($file) use ($filenameToDelete) {
        return $file['fileName'] != $filenameToDelete;
    });

    file_put_contents($metadataFile, json_encode($uploads, JSON_PRETTY_PRINT)); // Write updated data back to the file

    // Redirect to the same page to refresh the content and prevent form resubmission
    header("Location: notes.php");
    exit();
}
?>

</section>


<?php
$uploadDirectory = 'uploads/';
$metadataFile = 'uploads_metadata.json';

// Handle File Upload
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['uploadNotes'])) {
    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory, 0755, true); // Ensure the upload directory exists
    }

    $fileName = $_FILES['notesFile']['name'];
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    $targetFilePath = $uploadDirectory . time() . basename($fileName);
    $description = htmlspecialchars($_POST['description']);
    $className = htmlspecialchars($_POST['className']);
    $classNumber = htmlspecialchars($_POST['classNumber']);
    $uploadTime = date('Y-m-d H:i:s');

    // Move the uploaded file to its new location
    if (move_uploaded_file($_FILES['notesFile']['tmp_name'], $targetFilePath)) {
        $fileMetadata = [
            'fileName' => $targetFilePath,
            'uploadTime' => $uploadTime,
            'className' => $className,
            'classNumber' => $classNumber,
            'description' => $description
        ];

        // Read the existing metadata file
        $currentData = file_exists($metadataFile) ? json_decode(file_get_contents($metadataFile), true) : [];
        array_push($currentData, $fileMetadata);
        file_put_contents($metadataFile, json_encode($currentData, JSON_PRETTY_PRINT));
        echo "<p>File uploaded successfully.</p>";
    } else {
        echo "<p>Error uploading file.</p>";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submitComment'])) {
    $filename = $_POST['filename'];
    $comment = strip_tags($_POST['comment']); // Simple sanitization
    $commentsFilename = $uploadDirectory . basename($filename) . '_comments.txt';

    // Append the comment to the file
    file_put_contents($commentsFilename, $comment . "\n", FILE_APPEND);
    header("Location: notes.php"); // Redirect to clear POST data
    exit();
}

if (file_exists($metadataFile)) {
    $uploads = json_decode(file_get_contents($metadataFile), true);
    
    // Sort uploads by uploadTime in descending order
    usort($uploads, function($a, $b) {
        return strtotime($b['uploadTime']) - strtotime($a['uploadTime']);
    });

    echo '<div class="uploads-section">';
    foreach ($uploads as $file) {
        echo '<div class="card">';
        echo '<img src="stock.jpeg" alt="Default Thumbnail" style="width:100%; height:auto;">';
        echo '<div>';
        echo '<p><strong>Class:</strong> ' . htmlspecialchars($file['className']) . ' ' . htmlspecialchars($file['classNumber']) . '</p>';
        echo '<p><strong>Description:</strong> ' . htmlspecialchars($file['description']) . '</p>';
        echo '<p><a href="' . htmlspecialchars($file['fileName']) . '" target="_blank">View File</a></p>';
        
        // Display comments for each file
        $commentsFilename = $uploadDirectory . basename($file['fileName']) . '_comments.txt';
        if (file_exists($commentsFilename)) {
            $comments = file($commentsFilename, FILE_IGNORE_NEW_LINES);
            echo '<div class="comments">';
            foreach ($comments as $comment) {
                echo '<p>' . htmlspecialchars($comment) . '</p>';
            }
            echo '</div>';
        }

        // Form to add a new comment
        echo '<form action="" method="post">';
        echo '<input type="hidden" name="filename" value="' . $file['fileName'] . '">';
        echo '<textarea name="comment" required placeholder="Add a comment..."></textarea>';
        echo '<button type="submit" name="submitComment">Post Comment</button>';
        echo '</form>';
        
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
}
?>

    


        </section>
    </main>
</body>
<body>
    <!-- Your HTML content goes here -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Your JavaScript code here
            document.querySelectorAll('.comment-form').forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();  // Prevent traditional form submission
                    const formData = new FormData(this);
                    const cardDiv = this.closest('.card');  // Find the card element for updating comments

                    fetch('post_comment.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if(data.success) {
                            // Create new comment paragraph and append it to the comments section of this card
                            const newComment = document.createElement('p');
                            newComment.textContent = formData.get('comment'); // Get comment directly from form data
                            cardDiv.querySelector('.comments').appendChild(newComment);
                            this.reset(); // Reset the form fields after successful submission
                        } else {
                            alert('Error posting comment');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                });
            });
        });
   
</body>
</html>



</html>