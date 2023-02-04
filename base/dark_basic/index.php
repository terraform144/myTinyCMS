<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Basic</title>
    <style>
        div {
            padding:5px;
        }
    </style>
</head>
<body>
    <?php
        echo ':: dark basic main entry<br/><br/><i>un chouette sensei m\'a dit : "si tu es dans le mouvement, tu es dans le juste !"</i>';
    ?>
    <div>
        // https://github.com/TheGameCreators/Dark-Basic-Pro
    </div>
    <div>
        <pre>
            bool CDBMWriter::OutputDBM(const char *pDBMStr, size_t length)
            {
                if (!m_pDBMData)
                    return true;

                // Calculate length of data to add
                if (!length)
                    length = strlen(pDBMStr);
                length += 2;

                // First ensure memory is not exceeded
                CheckAndExpandDBMMemory(length);

                // Proceed to add to memory
                LPSTR pPointer = GetDBMDataPointer();
                if(pPointer+length >= m_pDBMData+m_dwDBMDataSize)
                {
                    // Failed
                    g_pErrorReport->AddErrorString("Failed to 'OutputDBM'");
                    return false;
                }

                memcpy(pPointer, pDBMStr, length);
                pPointer += length;
                *(pPointer++)=13;
                *(pPointer++)=10;
                SetDBMDataPointer(pPointer);

                // Complete
                return true;
            }
        </pre>
    </div>
</body>
</html>