<?php
function evaluacp($cadena)
{
$cadena=$cadena;
$cuantos= strlen($cadena);
$nodo=1;
for($y=0; $y<$cuantos; $y++)
{
$aux=substr($cadena,$y,1);
if($nodo==1 and ord ($aux)>=48 and ord ($aux)<=57)
{
$nodo=2;
}
else
{
    if($nodo==2 and ord ($aux)>=48 and ord ($aux)<=57) 
	{
	$nodo=3;
	}
	else
	{
	     if($nodo==3 and ord ($aux)>=48 and ord ($aux)<=57) 
		 {
		 $nodo=4;
		 }
		 else
		    {
		        if($nodo==4 and ord ($aux)>=48 and ord ($aux)<=57)
				{
				$nodo=5;
				}
				else
				{
				      if($nodo==5 and ord ($aux)>=48 and ord ($aux)<=57)
					  {
					  $nodo=6;
					  }
					  else
					    {
								 $nodo=0;
								 break;
							    }
							}
						}
					}
				}
			}
			                              if($nodo==6)
										  {
										  return 1;
										  }
										  else
										  {
										  return 0;
										 
}

}
function evaluatel($cadena)
{
$cadena=$cadena;
$cuantos= strlen($cadena);
$nodo=1;
for($y=0; $y<$cuantos; $y++)
{
$aux=substr($cadena,$y,1);
if($nodo==1 and ord ($aux)>=48 and ord ($aux)<=57)
{
$nodo=2;
}
else
{
    if($nodo==2 and ord ($aux)>=48 and ord ($aux)<=57)
	{
	$nodo=3;
	}
	else
	{
	     if($nodo==3 and ord ($aux)>=48 and ord ($aux)<=57)
		 {
		 $nodo=4;
		 }
		 else
		    {
		        if($nodo==4 and ord ($aux)>=48 and ord ($aux)<=57)
				{
				$nodo=5;
				}
				else
				{
				      if($nodo==5 and ord ($aux)>=48 and ord ($aux)<=57)
					  {
					  $nodo=6;
					  }
					  else
					    {
					       if($nodo==6 and ord ($aux)>=48 and ord ($aux)<=57)
						   {
						   $nodo=7;
						   }
						   else
						    {
						         if($nodo==7 and ord ($aux)>=48 and ord ($aux)<=57)
								{
								 $nodo=8;
								}
								 else
								{
								if($nodo==7 and ord ($aux)>=48 and ord ($aux)<=57)
								{
								 $nodo=8;
								 }
								 else
								 {
								 if($nodo==8 and ord ($aux)>=48 and ord ($aux)<=57)
								{
								$nodo=9;
								}
								else
								{
								if($nodo==9 and ord ($aux)>=48 and ord ($aux)<=57)
								{
								$nodo=10;
								}
								else
								{
								if($nodo==10 and ord ($aux)>=48 and ord ($aux)<=57)
								{
								$nodo=11;
								}
								else
								{
								 $nodo=0;
								 break;
							    }
							}
						}
					}
				}
			}
	    }
    }
	}
	}
	}
	}
	
											if($nodo==11)
											{
											return 1;
											}
											else
											{
											return 0;
											}


















}
function evaluaco($cadena)
{
$cadena=$cadena;
$cuantos=strlen($cadena);
$nodo=1;
 for($y=0; $y<$cuantos; $y++)
{
  $aux=substr($cadena,$y,1);
	if ($nodo==1 and ord($aux)>=97 and ord($aux)<=122)
		{
		  $nodo=2;
		}
		  else
		{
			 if ($nodo==2 and (ord($aux)>=48 and ord($aux)<=57 or ord($aux)>=97 and ord($aux)<=122  or $aux=='-' or $aux=='_' or $aux=='.'))
				{
			     $nodo=2;
				}
				 else 
				{	
					 if ($nodo==2 and $aux=='@')
						{
					     $nodo=3;
						}
						 else
							{
							 if($nodo==3 and ord($aux)>=97 and ord($aux)<=122)
								{
								 $nodo=3;
								}
								 else
									{
										if ($nodo==3 and $aux=='.')
										{
										$nodo=4;
										}
										else
										{
											if ($nodo==4 and $aux=='c')
											{
											$nodo=5;
											}
											else
											{
												if ($nodo==5 and $aux=='o')
												{
												$nodo=6;
												}
												else
												{
													if($nodo==6 and $aux=='m')
													{
													$nodo=7;
													}
													else
														{
															if ($nodo==4 and $aux=='o')
															{
															$nodo=5;
															}
															else
															{
																if ($nodo==5 and $aux=='r')
																{
																$nodo=6;
																}
																else
																{
																		if($nodo==6 and $aux=='g')
																		{
																		$nodo=7;
																		}
																	else 
																	{
																	
																		if ($nodo==4 and $aux=='e')
																		{
																		$nodo=5;
																		}
																		else
																		{
																			if ($nodo==5 and $aux=='d')
																			{
																			$nodo=6;
																			}
																			else
																			{
																					if($nodo==6 and $aux=='u')
																					{
																					$nodo=7;
																					}
																					else 
																					
																					{
																						if ($nodo==7 and $aux=='.')
																						{
																						$nodo=8;
																						}
																						else
																						{
																							if ($nodo==8 and $aux=='m') 
																							{
																							$nodo=9;
																							}
																							else
																							{
																								if ($nodo==9 and $aux=='x')
																								{
																								$nodo=10;
																								}
																									else
																									{
																									  if($nodo==8 and $aux=='a')
																										{
																										$nodo=9;
																										}
																										 else
																										{
																											if($nodo==9 and $aux=='r')
																												{
																												$nodo=10;
																												}
																																																														
																												
																													else 
																													{
											
																														$nodo=0;
																														break;
											
																													}   
																												
																										}	
																									}	
																							}
																						}
																					}
																			}
																		}
					
																	}
																}		
															}
														}
												}	
											}
										}
									}
							}
				}	
		}
}
if ($nodo==7 or $nodo==10)
 {
  return 1;
 }
  else
  {
  return 0;
  }
  }
function evaluamar($cadena)
{
$cadena=$cadena;
$cuantos=strlen($cadena);
$nodo=1;
	for($y=0; $y<$cuantos; $y++)
	{
	$aux=substr($cadena,$y);
	if($nodo==1 && ord ($aux)>=97 && ord ($aux)<=122 || (ord ($aux)>=65 && ord ($aux)<=90))
	{
	$nodo=2;
	}
	else
	{
	if($nodo==2 && ((ord ($aux)>=97 && ord ($aux)<=122 || ($aux)==' ')))
	{
	$nodo=2;
	}
	else
	{
	$nodo=0;
	break;
	}
	}
	}
	if($nodo==2)
   {
   return 1;
   }
   else 
   {
   return 0;
   }
   }
function evaluafecha($cadena) 
{
$cadena=$cadena;
$cuantos=strlen($cadena);
$nodo=1;
  for($y=0;$y<$cuantos;$y++)
  {
  $aux=substr($cadena,$y,1);
	if($nodo==1 and ord($aux)>=48 and ord ($aux)<=57)
      $nodo=2;
        else
		{
		 if($nodo==2 and ord($aux)>=48 and ord ($aux)<=57)
           $nodo=3;
		   else
		   {
		   	if($nodo==3 and ord($aux)>=48 and ord ($aux)<=57)
             $nodo=4;
              else
			  {
		       if($nodo==4 and ord($aux)>=48 and ord ($aux)<=57)
               $nodo=5;
			   else
			   {
               if($nodo==5 and $aux=='-')
				$nodo=6;
				else
				{
			      if($nodo==6 and ord($aux)>=48 and ord ($aux)<=57)
                     $nodo=7;
                       else
					   {
						 if($nodo==7 and ord($aux)>=48 and ord ($aux)<=57)
                          $nodo=8;
                            else
							{
							 if($nodo==8 and $aux=='-')
							 $nodo=9;
							 else
							 {
						       if($nodo==9 and ord($aux)>=48 and ord ($aux)<=57)
                                         $nodo=10;
									      else
										  {
						                   if($nodo==10 and ord($aux)>=48 and ord ($aux)<=57)
                                            $nodo=11;
							                 else 
                                                {											 
											  $nodo=0;
											  break;
                                               }
											   }
											   }
											   }
											   }
											   }
											   }
											   }
											   }
											   }
											   }
											  
                                            if($nodo==11)
                                               {
                                                 return 1;
                                                    }
                                                      else
                                                       {
                                                        return 0;
                                                           }
}														   
function evaluacurp($cadena)
{
$cadena=$cadena;
$cuantos=strlen($cadena);
$nodo=1;
 for($y=0; $y<$cuantos; $y++)
{
  $aux=substr($cadena,$y,1);
	if ($nodo==1 and ord($aux)>=64 and ord($aux)<=91)
	{ 
	$nodo=2;
	}
	else
	{
		if($nodo==2 and ord($aux)>=64 and ord($aux)<=91)
		{ 
		$nodo=3;
		}
		else
		{
			if ($nodo==3 and ord($aux)>=64 and ord($aux)<=91)
			{ 
			$nodo=4;
			}
			else
			{
				if($nodo==4 and ord($aux)>=64 and ord($aux)<=91)
				{
				$nodo=5;
				}
				else
				{
					if($nodo==5 and ord($aux)>=47 and ord($aux)<=58)
					{ 
					$nodo=6;
					}
					else
					{
						if ($nodo==6 and ord($aux)>=47 and ord($aux)<=58)
						{ 
						$nodo=7;
						}
						else
						{
							if($nodo==7 and ord($aux)>=47 and ord($aux)<=58)
							{
							$nodo=8;
							}
							else
							{
								if($nodo==8 and ord($aux)>=47 and ord($aux)<=58)
								{ 
								$nodo=9;
								}
								else
								{
									if ($nodo==9 and ord($aux)>=47 and ord($aux)<=58)
									{ 
									$nodo=10;
									}
									else
										{
										if($nodo==10 and ord($aux)>=47 and ord($aux)<=58)
										{
										$nodo=11;
										}
										else
										{
											if($nodo==11 and ord($aux)>=64 and ord($aux)<=91)
											{ 
											$nodo=12;
											}
											else
												{
												if ($nodo==12 and ord($aux)>=64 and ord($aux)<=91)
												{ 
												$nodo=13;
												}
												else
												{
													if($nodo==13 and ord($aux)>=64 and ord($aux)<=91)
													{
													$nodo=14;
													}
													else
													{
														if($nodo==14 and ord($aux)>=64 and ord($aux)<=91)
														{ 
														$nodo=15;
														}
														else
															{
															if ($nodo==15 and ord($aux)>=64 and ord($aux)<=91)
															{ 
															$nodo=16;
															}
															else
																{
																if($nodo==16 and ord($aux)>=64 and ord($aux)<=91)
																{
																$nodo=17;
																}
																else
																{
																	if($nodo==17 and ord($aux)>=47 and ord($aux)<=58)
																	{ 
																	$nodo=18;
																	}
																	else
																	{
																		if ($nodo==18 and ord($aux)>=47 and ord($aux)<=58)
																		{ 
																		$nodo=19;
																		}
																		else
																		{
																			$nodo=0;
																			break;
																		}
																	}
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
	}
}
if($nodo==19)
{
return 1;
}
else
{
return 0;
}
}
function evaluarfc($cadena)
{
$cadena=$cadena;
$cuantos=strlen($cadena);
$nodo=1;
	for($y=0; $y<$cuantos; $y++)
	{
	$aux=substr($cadena,$y);
	if($nodo==1 and ord ($aux)>=65 and ord ($aux)<=90)
	{
	$nodo=2;
	}
	else
	{
    if($nodo==2 and  ord ($aux)>=65 and ord ($aux)<=90)
	{
	$nodo=3;
	}
	else
	{
    if($nodo==3 and ord ($aux)>=65 and ord ($aux)<=90)
	{
	$nodo=4;
	}
	else
	{
	if($nodo==4 and ord ($aux)>=65 and ord ($aux)<=90)
    {
	$nodo=5;
	}
	else
	{
    if($nodo==5 and ord ($aux)>=48 and ord ($aux)<=57)
	{
	$nodo=6;
	}
	else
	{
	if($nodo==6 and ord ($aux)>=48 and ord ($aux)<=57)
    {
    $nodo=7;
    }
	else
	{
	if($nodo==7 and ord ($aux)>=48 and ord ($aux)<=57)
	{
	$nodo=8;
	}
	else
	{
	if($nodo==8 and ord ($aux)>=48 and ord ($aux)<=57)
	{
	$nodo=9;
	}
	else
	{
	if($nodo==9 and ord ($aux)>=48 and ord ($aux)<=57)
	{
	$nodo=10;
	}
	else
	{
	if($nodo==10 and ord ($aux)>=48 and ord ($aux)<=57)
	{
	$nodo=11;
	}
	else
	{
	$nodo=0;
	break;
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	}
	if ($nodo==11)
	{
	return 1;
	}
	else
	{
	return 0;
	}
	}
   ?>