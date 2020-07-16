Hospitals often use generic identifiers of patients records, which are strings made up of number and letters in custome formats, to identify patients.

Most of them use incrementing ids as part of identifier.

To match that real world practice with software please write a function that given a string $recordIdentifier, returns a stirng with an incremented number follwing the case insensitive "record" word
separated by an optional dash or underscore.

Note that the number can be missing and should start at one in that case.
If there is no "record" identifier the string hsould be returned as is.

So "Record0001" would turn into "Record0002" and similar.
Record1                     =>          Record2
Record_15                   =>          Record_16
Site_5_Record_7             =>          Site_5_Record_7
Site_5_Record_002           =>          Site_5_Record_002
Record_002_Site_2           =>          Record_002_Site_2