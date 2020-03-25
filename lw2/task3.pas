PROGRAM Sarah(INPUT, OUTPUT);
USES
  DOS;
VAR
  F: TEXT;
  Ch: STRING;
BEGIN
  WRITELN('Content-Type: text/plain');
  WRITELN;
  ASSIGN(F, 'F.tmp');
  IF (GetEnv('QUERY_STRING')) = ('')
  THEN
    WRITE('Hello Anon!')
  ELSE
    BEGIN
      REWRITE(F);
      WRITE(F, (GetEnv('QUERY_STRING')));
      CLOSE (F);
      RESET(F);
      WRITE('Hello dear ');
      READ(F, Ch);
      WRITE(Ch);
      CLOSE (F)
    END
END.

