<!--
//------------------------------------------------------------------
function validate_CurrCumulaGPA(CurrCumulaGPA, alertscript)
   //  check for valid numeric strings 
   {
   var strValidChars = "0123456789.";
   var strChar;
   var blnResult = true;

   if (CurrCumulaGPA.length == 0) return false;

   //  test CurrCumulaGPA consists of valid characters listed above
   for (i = 0; i < CurrCumulaGPA.length && blnResult == true; i++)
      {
      strChar = CurrCumulaGPA.charAt(i);
      if (strValidChars.indexOf(strChar) == -1)
         {
		 alert("Ø§Ù„Ø±Ø¬Ø§Ø¡ Ø§Ø¯Ø®Ø§Ù„ Ø§Ù„Ù…Ø¹Ø¯Ù„ Ø§Ù„ØªØ±Ø§ÙƒÙ…ÙŠ Ø§Ù„Ø³Ø§Ø¨Ù‚");
		 document.RequiredData.CurrCumulaGPA.select();
         blnResult = false;
         }
      }
   return blnResult;
   }

//------------------------------------------------------------------
function validate_WantedGPA(WantedGPA)
//  check for valid numeric strings 
{
var strValidChars = "0123456789.";
var strChar;
var blnResult = true;

if (WantedGPA.length == 0) return false;

//  test WantedGPA consists of valid characters listed above
for (i = 0; i < WantedGPA.length && blnResult == true; i++)
{
	strChar = WantedGPA.charAt(i);
	if (strValidChars.indexOf(strChar) == -1)
    {
	alert("Ø§Ù„Ø±Ø¬Ø§Ø¡ Ø§Ø¯Ø®Ø§Ù„ Ø§Ù„Ù…Ø¹Ø¯Ù„ Ø§Ù„ØªØ±Ø§ÙƒÙ…ÙŠ Ø§Ù„Ø³Ø§Ø¨Ù‚");
	document.CalculationForm2.WantedCumulGPA.select();
    blnResult = false;
    }
}
return blnResult;
}
 
//------------------------------------------------------------------
//checks to see that entered number is valid
function validate_TotCredHrComp()
{
	var o = document.RequiredData.TotCredHrComp;
    switch (isInteger(o.value))
    {
		case true:
        	break;
        case false:
            alert("ÙŠØ¬Ø¨ Ø§Ø¯Ø®Ø§Ù„ Ù‚ÙŠÙ…Ø© Ø±Ù‚Ù… ØµØ§Ù„Ø­");
			document.RequiredData.TotCredHrComp.select();
			return false;
    }
	return true;
}

//------------------------------------------------------------------
//checks to see that entered number is valid
function validate_CurrentCredHrComp()
{
	var o = document.CalculationForm2.CurrentCreditHours;
    switch (isInteger(o.value))
    {
		case true:
        	break;
        case false:
            alert("The value entered for current credit hours is not valid. \n Credit hours must be a number.");
			document.CalculationForm2.CurrentCreditHours.select();
			return false;
    }
	return true;
}

//------------------------------------------------------------------
//checks to see that entered number is an integer
function isInteger (s)
{
      var i;

      if (isEmpty(s))
      if (isInteger.arguments.length == 1) return 0;
      else return (isInteger.arguments[1] == true);

      for (i = 0; i < s.length; i++)
      {
         var c = s.charAt(i);

         if (!isDigit(c)) return false;
      }

      return true;
}
function isEmpty(s)
{
   return ((s == null) || (s.length == 0))
}
function isDigit (c)
{
   return ((c >= "0") && (c <= "9"))
}

//------------------------------------------------------------------
//controls access to the previous grade field
function enableField(ControlField, ResultField)
{
	  if (ControlField.value == 1)
      {
		 document.getElementById(ResultField).disabled=false;
		 return true;
      }
	  else if (ControlField.value == 0)
	  {
	  	document.getElementById(ResultField).disabled=true;
		return true;
	  }
}

//------------------------------------------------------------------
//calculates expected gpa based on classes and grades entered
function CalcExpectedCumuGPA(ExpectedCumuGPAField)
{
	
	if (validate_CurrCumulaGPA(document.RequiredData.CurrCumulaGPA.value) == 0)
	{
		document.RequiredData.CurrCumulaGPA.select();
		return false;
	}
	if (validate_TotCredHrComp() == 0)
	{
		document.RequiredData.TotCredHrComp.select();
		return false;
	}
	
	//variables to us to calculate expected GPA
	var CurrentCumulativeGPA = parseFloat(document.RequiredData.CurrCumulaGPA.value);
	var TotalCreditHoursCompleted = parseFloat(document.RequiredData.TotCredHrComp.value);
	var C1Credits = parseFloat(document.CalculationForm.C1Credits.value);
	var C1AnticipatedGrade = parseFloat(document.CalculationForm.C1AnticipatedGrade.value);
	var C1Repeat = parseFloat(document.CalculationForm.C1Repeat.value);
	var C1PreviousGrade = parseFloat(document.CalculationForm.C1PreviousGrade.value);
	var C2Credits = parseFloat(document.CalculationForm.C2Credits.value);
	var C2AnticipatedGrade = parseFloat(document.CalculationForm.C2AnticipatedGrade.value);
	var C2Repeat = parseFloat(document.CalculationForm.C2Repeat.value);
	var C2PreviousGrade = parseFloat(document.CalculationForm.C2PreviousGrade.value);
	var C3Credits = parseFloat(document.CalculationForm.C3Credits.value);
	var C3AnticipatedGrade = parseFloat(document.CalculationForm.C3AnticipatedGrade.value);
	var C3Repeat = parseFloat(document.CalculationForm.C3Repeat.value);
	var C3PreviousGrade = parseFloat(document.CalculationForm.C3PreviousGrade.value);
	var C4Credits = parseFloat(document.CalculationForm.C4Credits.value);
	var C4AnticipatedGrade = parseFloat(document.CalculationForm.C4AnticipatedGrade.value);
	var C4Repeat = parseFloat(document.CalculationForm.C4Repeat.value);
	var C4PreviousGrade = parseFloat(document.CalculationForm.C4PreviousGrade.value);
	var C5Credits = parseFloat(document.CalculationForm.C5Credits.value);
	var C5AnticipatedGrade = parseFloat(document.CalculationForm.C5AnticipatedGrade.value);
	var C5Repeat = parseFloat(document.CalculationForm.C5Repeat.value);
	var C5PreviousGrade = parseFloat(document.CalculationForm.C5PreviousGrade.value);
	var C6Credits = parseFloat(document.CalculationForm.C6Credits.value);
	var C6AnticipatedGrade = parseFloat(document.CalculationForm.C6AnticipatedGrade.value);
	var C6Repeat = parseFloat(document.CalculationForm.C6Repeat.value);
	var C6PreviousGrade = parseFloat(document.CalculationForm.C6PreviousGrade.value);
	var C7Credits = parseFloat(document.CalculationForm.C7Credits.value);
	var C7AnticipatedGrade = parseFloat(document.CalculationForm.C7AnticipatedGrade.value);
	var C7Repeat = parseFloat(document.CalculationForm.C7Repeat.value);
	var C7PreviousGrade = parseFloat(document.CalculationForm.C7PreviousGrade.value);
	var C8Credits = parseFloat(document.CalculationForm.C8Credits.value);
	var C8AnticipatedGrade = parseFloat(document.CalculationForm.C8AnticipatedGrade.value);
	var C8Repeat = parseFloat(document.CalculationForm.C8Repeat.value);
	var C8PreviousGrade = parseFloat(document.CalculationForm.C8PreviousGrade.value);
	var CourseCreditsSum = 0.0;
	var C1CalculatedQPA = 0.0;
	var C2CalculatedQPA = 0.0;
	var C3CalculatedQPA = 0.0;
	var C4CalculatedQPA = 0.0;
	var C5CalculatedQPA = 0.0;
	var C6CalculatedQPA = 0.0;
	var C7CalculatedQPA = 0.0;
	var C8CalculatedQPA = 0.0;
	var CourseRepeatPoints = 0.0;
	var CourseRepeatCredits = 0.0;
	var CourseCalculatedQPASum = 0.0;
	var CurrentCalculatedQPA = 0.0;
	var AnticipatedGPA = 0.0;
	
	//course methods are broken up into seperate statments to control empty answers, if something is empty, entire course is ignored
	if ((C1Credits != 0) && (C1AnticipatedGrade != -1))
	{
		CourseCreditsSum = CourseCreditsSum + C1Credits;
		C1CalculatedQPA = C1Credits * C1AnticipatedGrade;
		CourseCalculatedQPASum = CourseCalculatedQPASum + C1CalculatedQPA;
		if (C1Repeat == 1)
		{
			if (C1PreviousGrade != -1)
			{
				CourseRepeatPoints = CourseRepeatPoints + (C1PreviousGrade * C1Credits);
				CourseRepeatCredits = CourseRepeatCredits + C1Credits;
			}
			else
			{
				alert("A previous grade must be entered for repeat courses.");
				return false;
			}
		}
	}
	
	if ((C2Credits != 0) && (C2AnticipatedGrade != -1))
	{
		CourseCreditsSum = CourseCreditsSum + C2Credits;
		C2CalculatedQPA = C2Credits * C2AnticipatedGrade;
		CourseCalculatedQPASum = CourseCalculatedQPASum + C2CalculatedQPA;
		if (C2Repeat == 1)
		{
			if (C2PreviousGrade != -1)
			{
				CourseRepeatPoints = CourseRepeatPoints + (C2PreviousGrade * C2Credits);
				CourseRepeatCredits = CourseRepeatCredits + C2Credits;
			}
			else
			{
				alert("A previous grade must be entered for repeat courses.");
				return false;
			}
		}
	}
	
	
	if ((C3Credits != 0) && (C3AnticipatedGrade != -1))
	{
		CourseCreditsSum = CourseCreditsSum + C3Credits;
		C3CalculatedQPA = C3Credits * C3AnticipatedGrade;
		CourseCalculatedQPASum = CourseCalculatedQPASum + C3CalculatedQPA;
		if (C3Repeat == 1)
		{
			if (C3PreviousGrade != -1)
			{
				CourseRepeatPoints = CourseRepeatPoints + (C3PreviousGrade * C3Credits);
				CourseRepeatCredits = CourseRepeatCredits + C3Credits;
			}
			else
			{
				alert("A previous grade must be entered for repeat courses.");
				return false;
			}
		}
	}
	
	
	if ((C4Credits != 0) && (C4AnticipatedGrade != -1))
	{
		CourseCreditsSum = CourseCreditsSum + C4Credits;
		C4CalculatedQPA = C4Credits * C4AnticipatedGrade;
		CourseCalculatedQPASum = CourseCalculatedQPASum + C4CalculatedQPA;
		if (C4Repeat == 1)
		{
			if (C4PreviousGrade != -1)
			{
				CourseRepeatPoints = CourseRepeatPoints + (C4PreviousGrade * C4Credits);
				CourseRepeatCredits = CourseRepeatCredits + C4Credits;
			}
			else
			{
				alert("A previous grade must be entered for repeat courses.");
				return false;
			}
		}
	}
	
	if ((C5Credits != 0) && (C5AnticipatedGrade != -1))
	{
		CourseCreditsSum = CourseCreditsSum + C5Credits;
		C5CalculatedQPA = C5Credits * C5AnticipatedGrade;
		CourseCalculatedQPASum = CourseCalculatedQPASum + C5CalculatedQPA;
		if (C5Repeat == 1)
		{
			if (C5PreviousGrade != -1)
			{
				CourseRepeatPoints = CourseRepeatPoints + (C5PreviousGrade * C5Credits);
				CourseRepeatCredits = CourseRepeatCredits + C5Credits;
			}
			else
			{
				alert("A previous grade must be entered for repeat courses.");
				return false;
			}
		}
	}
	
	if ((C6Credits != 0) && (C6AnticipatedGrade != -1))
	{
		CourseCreditsSum = CourseCreditsSum + C6Credits;
		C6CalculatedQPA = C6Credits * C6AnticipatedGrade;
		CourseCalculatedQPASum = CourseCalculatedQPASum + C6CalculatedQPA;
		if (C6Repeat == 1)
		{
			if (C6PreviousGrade != -1)
			{
				CourseRepeatPoints = CourseRepeatPoints + (C6PreviousGrade * C6Credits);
				CourseRepeatCredits = CourseRepeatCredits + C6Credits;
			}
			else
			{
				alert("A previous grade must be entered for repeat courses.");
				return false;
			}
		}
	}
	
	if ((C7Credits != 0) && (C7AnticipatedGrade != -1))
	{
		CourseCreditsSum = CourseCreditsSum + C7Credits;
		C7CalculatedQPA = C7Credits * C7AnticipatedGrade;
		CourseCalculatedQPASum = CourseCalculatedQPASum + C7CalculatedQPA;
		if (C7Repeat == 1)
		{
			if (C7PreviousGrade != -1)
			{
				CourseRepeatPoints = CourseRepeatPoints + (C7PreviousGrade * C7Credits);
				CourseRepeatCredits = CourseRepeatCredits + C7Credits;
			}
			else
			{
				alert("A previous grade must be entered for repeat courses.");
				return false;
			}
		}
	}
	
	if ((C8Credits != 0) && (C8AnticipatedGrade != -1))
	{
		CourseCreditsSum = CourseCreditsSum + C8Credits;
		C8CalculatedQPA = C8Credits * C8AnticipatedGrade;
		CourseCalculatedQPASum = CourseCalculatedQPASum + C8CalculatedQPA;
		if (C8Repeat == 1)
		{
			if (C8PreviousGrade != -1)
			{
				CourseRepeatPoints = CourseRepeatPoints + (C8PreviousGrade * C8Credits);
				CourseRepeatCredits = CourseRepeatCredits + C8Credits;
			}
			else
			{
				alert("A previous grade must be entered for repeat courses.");
				return false;
			}
		}
	}

	

	CurrentCalculatedQPA = CurrentCumulativeGPA * TotalCreditHoursCompleted;
	AnticipatedGPA = (CurrentCalculatedQPA + CourseCalculatedQPASum - CourseRepeatPoints)/(TotalCreditHoursCompleted + CourseCreditsSum - CourseRepeatCredits)
	
//	alert(AnticipatedGPA);
//	alert(CurrentCalculatedQPA);
//	alert(CourseCalculatedQPASum);
//	alert(CourseRepeatPoints);
//	alert(TotalCreditHoursCompleted);
//	alert(CourseCreditsSum);
//	alert(CourseRepeatCredits);
	
	document.getElementById(ExpectedCumuGPAField).value=AnticipatedGPA.toFixed(3);
	
	return true;
}


//------------------------------------------------------------------
//calculates expected Term gpa based on classes and grades entered
function CalcExpectedTermGPA(ExpectedCumuGPAField)
{
	
	//variables to us to calculate expected GPA
	var CurrentCumulativeGPA = 0.0;
	var TotalCreditHoursCompleted = 0.0;
	var C1Credits = parseFloat(document.CalculationForm.C1Credits.value);
	var C1AnticipatedGrade = parseFloat(document.CalculationForm.C1AnticipatedGrade.value);
	var C1Repeat = parseFloat(document.CalculationForm.C1Repeat.value);
	var C1PreviousGrade = parseFloat(document.CalculationForm.C1PreviousGrade.value);
	var C2Credits = parseFloat(document.CalculationForm.C2Credits.value);
	var C2AnticipatedGrade = parseFloat(document.CalculationForm.C2AnticipatedGrade.value);
	var C2Repeat = parseFloat(document.CalculationForm.C2Repeat.value);
	var C2PreviousGrade = parseFloat(document.CalculationForm.C2PreviousGrade.value);
	var C3Credits = parseFloat(document.CalculationForm.C3Credits.value);
	var C3AnticipatedGrade = parseFloat(document.CalculationForm.C3AnticipatedGrade.value);
	var C3Repeat = parseFloat(document.CalculationForm.C3Repeat.value);
	var C3PreviousGrade = parseFloat(document.CalculationForm.C3PreviousGrade.value);
	var C4Credits = parseFloat(document.CalculationForm.C4Credits.value);
	var C4AnticipatedGrade = parseFloat(document.CalculationForm.C4AnticipatedGrade.value);
	var C4Repeat = parseFloat(document.CalculationForm.C4Repeat.value);
	var C4PreviousGrade = parseFloat(document.CalculationForm.C4PreviousGrade.value);
	var C5Credits = parseFloat(document.CalculationForm.C5Credits.value);
	var C5AnticipatedGrade = parseFloat(document.CalculationForm.C5AnticipatedGrade.value);
	var C5Repeat = parseFloat(document.CalculationForm.C5Repeat.value);
	var C5PreviousGrade = parseFloat(document.CalculationForm.C5PreviousGrade.value);
	var C6Credits = parseFloat(document.CalculationForm.C6Credits.value);
	var C6AnticipatedGrade = parseFloat(document.CalculationForm.C6AnticipatedGrade.value);
	var C6Repeat = parseFloat(document.CalculationForm.C6Repeat.value);
	var C6PreviousGrade = parseFloat(document.CalculationForm.C6PreviousGrade.value);
	var C7Credits = parseFloat(document.CalculationForm.C7Credits.value);
	var C7AnticipatedGrade = parseFloat(document.CalculationForm.C7AnticipatedGrade.value);
	var C7Repeat = parseFloat(document.CalculationForm.C7Repeat.value);
	var C7PreviousGrade = parseFloat(document.CalculationForm.C7PreviousGrade.value);
	var C8Credits = parseFloat(document.CalculationForm.C8Credits.value);
	var C8AnticipatedGrade = parseFloat(document.CalculationForm.C8AnticipatedGrade.value);
	var C8Repeat = parseFloat(document.CalculationForm.C8Repeat.value);
	var C8PreviousGrade = parseFloat(document.CalculationForm.C8PreviousGrade.value);
	var CourseCreditsSum = 0.0;
	var C1CalculatedQPA = 0.0;
	var C2CalculatedQPA = 0.0;
	var C3CalculatedQPA = 0.0;
	var C4CalculatedQPA = 0.0;
	var C5CalculatedQPA = 0.0;
	var C6CalculatedQPA = 0.0;
	var C7CalculatedQPA = 0.0;
	var C8CalculatedQPA = 0.0;
	var CourseRepeatPoints = 0.0;
	var CourseRepeatCredits = 0.0;
	var CourseCalculatedQPASum = 0.0;
	var CurrentCalculatedQPA = 0.0;
	var AnticipatedGPA = 0.0;
	
	//course methods are broken up into seperate statments to control empty answers, if something is empty, entire course is ignored
	if ((C1Credits != 0) && (C1AnticipatedGrade != -1))
	{
		CourseCreditsSum = CourseCreditsSum + C1Credits;
		C1CalculatedQPA = C1Credits * C1AnticipatedGrade;
		CourseCalculatedQPASum = CourseCalculatedQPASum + C1CalculatedQPA;
	}
	
	if ((C2Credits != 0) && (C2AnticipatedGrade != -1))
	{
		CourseCreditsSum = CourseCreditsSum + C2Credits;
		C2CalculatedQPA = C2Credits * C2AnticipatedGrade;
		CourseCalculatedQPASum = CourseCalculatedQPASum + C2CalculatedQPA;
	}
	
	
	if ((C3Credits != 0) && (C3AnticipatedGrade != -1))
	{
		CourseCreditsSum = CourseCreditsSum + C3Credits;
		C3CalculatedQPA = C3Credits * C3AnticipatedGrade;
		CourseCalculatedQPASum = CourseCalculatedQPASum + C3CalculatedQPA;
	}
	
	
	if ((C4Credits != 0) && (C4AnticipatedGrade != -1))
	{
		CourseCreditsSum = CourseCreditsSum + C4Credits;
		C4CalculatedQPA = C4Credits * C4AnticipatedGrade;
		CourseCalculatedQPASum = CourseCalculatedQPASum + C4CalculatedQPA;
	}
	
	if ((C5Credits != 0) && (C5AnticipatedGrade != -1))
	{
		CourseCreditsSum = CourseCreditsSum + C5Credits;
		C5CalculatedQPA = C5Credits * C5AnticipatedGrade;
		CourseCalculatedQPASum = CourseCalculatedQPASum + C5CalculatedQPA;
	}
	
	if ((C6Credits != 0) && (C6AnticipatedGrade != -1))
	{
		CourseCreditsSum = CourseCreditsSum + C6Credits;
		C6CalculatedQPA = C6Credits * C6AnticipatedGrade;
		CourseCalculatedQPASum = CourseCalculatedQPASum + C6CalculatedQPA;
	}
	
	if ((C7Credits != 0) && (C7AnticipatedGrade != -1))
	{
		CourseCreditsSum = CourseCreditsSum + C7Credits;
		C7CalculatedQPA = C7Credits * C7AnticipatedGrade;
		CourseCalculatedQPASum = CourseCalculatedQPASum + C7CalculatedQPA;
	}
	
	if ((C8Credits != 0) && (C8AnticipatedGrade != -1))
	{
		CourseCreditsSum = CourseCreditsSum + C8Credits;
		C8CalculatedQPA = C8Credits * C8AnticipatedGrade;
		CourseCalculatedQPASum = CourseCalculatedQPASum + C8CalculatedQPA;
	}

	CurrentCalculatedQPA = CurrentCumulativeGPA * TotalCreditHoursCompleted;
	AnticipatedGPA = (CurrentCalculatedQPA + CourseCalculatedQPASum - CourseRepeatPoints)/(TotalCreditHoursCompleted + CourseCreditsSum - CourseRepeatCredits)
	
	document.getElementById(ExpectedCumuGPAField).value=AnticipatedGPA.toFixed(3);
	
	return true;
}


//------------------------------------------------------------------
//calculates needed gpa during semester to obtain a certain cumulative gpa
function CalcNeededGPA(NeededGPAField)
{
	var CurrentCumulativeGPA = parseFloat(document.RequiredData.CurrCumulaGPA.value);
	var TotalCreditHoursCompleted = parseFloat(document.RequiredData.TotCredHrComp.value);
	var CurrentCreditHoursTaking = parseFloat(document.CalculationForm2.CurrentCreditHours.value);
	var WantedCumulGPA = parseFloat(document.CalculationForm2.WantedCumulGPA.value);
	var CurrentCalculatedQPA = 0.0;
	var CurrentCalculatedQPA = 0.0;
	var NeededGPAVal = 0.0;
	
	if (validate_CurrCumulaGPA(document.RequiredData.CurrCumulaGPA.value) == 0)
	{
		document.RequiredData.CurrCumulaGPA.select();
		return false;
	}
	if (validate_TotCredHrComp() == 0)
	{
		document.RequiredData.TotCredHrComp.select();
		return false;
	}
	if (validate_WantedGPA(document.CalculationForm2.WantedCumulGPA.value) == 0)
	{
		document.CalculationForm2.WantedCumulGPA.select();
		return false;
	}
	if (validate_CurrentCredHrComp() == 0)
	{
		document.CalculationForm2.CurrentCreditHours.select();
		return false;
	}
	
	CurrentCalculatedQPA = CurrentCumulativeGPA * TotalCreditHoursCompleted;
	
	NeededGPAVal = ((( TotalCreditHoursCompleted + CurrentCreditHoursTaking ) * WantedCumulGPA ) - CurrentCalculatedQPA) / CurrentCreditHoursTaking;
	
	document.getElementById(NeededGPAField).value=NeededGPAVal.toFixed(3);
	
	return true;
}

//-->