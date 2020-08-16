@extends('site.index')

@section('main')

<section>
  <div class="container">
      <div class="gbapage">
        <h3 class="mtitle"> حساب المعدل <!--<button class="addmateria"> اضافة مادة </button>--></h3>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <form name="RequiredData" method="post" action="https://www.elechu.com/grade">
          <div class="gbaoptions gbaoptions2">
            <div class="gbacalc">
              <span>
                <label for=""> المعدل التراكمي السابق:   </label>
                <input name="CurrCumulaGPA" id="CurrCumulaGPA" value="0.000" maxlength="5" onclick="this.value = '';" onkeyup="return validate_CurrCumulaGPA(this.value)" tabindex="1" type="Text">
              </span>
              <span>
                <label for="">عدد الساعات المقطوعة السابقة:</label>
                <input name="TotCredHrComp" id="TotCredHrComp" value="000" maxlength="3" onclick="this.value = '';" onkeyup="return validate_TotCredHrComp()" tabindex="2" type="Text">
              </span>
            </div><!-- gbacalc -->
          </div><!-- gbaoptions -->
        </form>
        </div><!-- col -->

        <form name="CalculationForm" method="post" action="">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

          <div class="gbaitem">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  <input type="text" class="material_name1" data-num="1" placeholder="اسم المادة">
                </div><!-- col -->
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                  <select class="cselect material_hours1" name="C1Credits" id="C1Credits" data-num="1">
                    <option value="0" selected>عدد الساعات</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div><!-- col -->
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                  <select class="cselect material_marks1" data-num="1" name="C1AnticipatedGrade" id="C1AnticipatedGrade">
                    <option value="-1" selected>العلامة المتوقعة</option>
                    <option value="4.00">A+</option>
                    <option value="3.75">A</option>
                    <option value="3.50">A-</option>
                    <option value="3.25">B+</option>
                    <option value="3.00">B</option>
                    <option value="2.75">B-</option>
                    <option value="2.50">C+</option>
                    <option value="2.25">C</option>
                    <option value="2.00">C-</option>
                    <option value="1.75">D+</option>
                    <option value="1.50">D</option>
                    <option value="0.00">F</option>
                  </select>
                </div><!-- col -->
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                  <select class="cselect material_repeat" data-num="1" name="C1Repeat" id="C1Repeat">
                    <option value="0" selected>هل المادة معادة ؟</option>
                    <option value="0">لا</option>
                    <option value="1">نعم</option>
                  </select>
                </div><!-- col -->
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                  <select class="cselect material_pmark" data-num="1" disabled name="C1PreviousGrade" id="C1PreviousGrade">
                    <option value="-1" selected>العلامة السابقة</option>
                    <option value="4.00">A+</option>
                    <option value="3.75">A</option>
                    <option value="3.50">A-</option>
                    <option value="3.25">B+</option>
                    <option value="3.00">B</option>
                    <option value="2.75">B-</option>
                    <option value="2.50">C+</option>
                    <option value="2.25">C</option>
                    <option value="2.00">C-</option>
                    <option value="1.75">D+</option>
                    <option value="1.50">D</option>
                    <option value="0.00">F</option>
                  </select>
                </div><!-- col -->
            </div><!-- gbaitem -->

            <div class="gbaitem">
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <input type="text" class="material_name1" data-num="1" placeholder="اسم المادة">
                  </div><!-- col -->
                  <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                    <select class="cselect material_hours1" name="C2Credits" id="C2Credits" data-num="1">
                      <option value="0" selected>عدد الساعات</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div><!-- col -->
                  <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                    <select class="cselect material_marks1" data-num="1" name="C2AnticipatedGrade" id="C2AnticipatedGrade">
                      <option value="-1" selected>العلامة المتوقعة</option>
                      <option value="4.00">A+</option>
                      <option value="3.75">A</option>
                      <option value="3.50">A-</option>
                      <option value="3.25">B+</option>
                      <option value="3.00">B</option>
                      <option value="2.75">B-</option>
                      <option value="2.50">C+</option>
                      <option value="2.25">C</option>
                      <option value="2.00">C-</option>
                      <option value="1.75">D+</option>
                      <option value="1.50">D</option>
                      <option value="0.00">F</option>
                    </select>
                  </div><!-- col -->
                  <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                    <select class="cselect material_repeat" data-num="1" name="C2Repeat" id="C2Repeat">
                      <option value="0" selected>هل المادة معادة ؟</option>
                      <option value="0">لا</option>
                      <option value="1">نعم</option>
                    </select>
                  </div><!-- col -->
                  <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                    <select class="cselect material_pmark" data-num="1" disabled name="C2PreviousGrade" id="C2PreviousGrade">
                      <option value="-1" selected>العلامة السابقة</option>
                      <option value="4.00">A+</option>
                      <option value="3.75">A</option>
                      <option value="3.50">A-</option>
                      <option value="3.25">B+</option>
                      <option value="3.00">B</option>
                      <option value="2.75">B-</option>
                      <option value="2.50">C+</option>
                      <option value="2.25">C</option>
                      <option value="2.00">C-</option>
                      <option value="1.75">D+</option>
                      <option value="1.50">D</option>
                      <option value="0.00">F</option>
                    </select>
                  </div><!-- col -->
              </div><!-- gbaitem -->

              <div class="gbaitem">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <input type="text" class="material_name1" data-num="1" placeholder="اسم المادة">
                    </div><!-- col -->
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                      <select class="cselect material_hours1" name="C3Credits" id="C3Credits" data-num="1">
                        <option value="0" selected>عدد الساعات</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                      </select>
                    </div><!-- col -->
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                      <select class="cselect material_marks1" data-num="1" name="C3AnticipatedGrade" id="C3AnticipatedGrade">
                        <option value="-1" selected>العلامة المتوقعة</option>
                        <option value="4.00">A+</option>
                        <option value="3.75">A</option>
                        <option value="3.50">A-</option>
                        <option value="3.25">B+</option>
                        <option value="3.00">B</option>
                        <option value="2.75">B-</option>
                        <option value="2.50">C+</option>
                        <option value="2.25">C</option>
                        <option value="2.00">C-</option>
                        <option value="1.75">D+</option>
                        <option value="1.50">D</option>
                        <option value="0.00">F</option>
                      </select>
                    </div><!-- col -->
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                      <select class="cselect material_repeat" data-num="1" name="C3Repeat" id="C3Repeat">
                        <option value="0" selected>هل المادة معادة ؟</option>
                        <option value="0">لا</option>
                        <option value="1">نعم</option>
                      </select>
                    </div><!-- col -->
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                      <select class="cselect material_pmark" data-num="1" disabled name="C3PreviousGrade" id="C3PreviousGrade">
                        <option value="-1" selected>العلامة السابقة</option>
                        <option value="4.00">A+</option>
                        <option value="3.75">A</option>
                        <option value="3.50">A-</option>
                        <option value="3.25">B+</option>
                        <option value="3.00">B</option>
                        <option value="2.75">B-</option>
                        <option value="2.50">C+</option>
                        <option value="2.25">C</option>
                        <option value="2.00">C-</option>
                        <option value="1.75">D+</option>
                        <option value="1.50">D</option>
                        <option value="0.00">F</option>
                      </select>
                    </div><!-- col -->
                </div><!-- gbaitem -->

                <div class="gbaitem">
                      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <input type="text" class="material_name1" data-num="1" placeholder="اسم المادة">
                      </div><!-- col -->
                      <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                        <select class="cselect material_hours1" name="C4Credits" id="C4Credits" data-num="1">
                          <option value="0" selected>عدد الساعات</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                      </div><!-- col -->
                      <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                        <select class="cselect material_marks1" data-num="1" name="C4AnticipatedGrade" id="C4AnticipatedGrade">
                          <option value="-1" selected>العلامة المتوقعة</option>
                          <option value="4.00">A+</option>
                          <option value="3.75">A</option>
                          <option value="3.50">A-</option>
                          <option value="3.25">B+</option>
                          <option value="3.00">B</option>
                          <option value="2.75">B-</option>
                          <option value="2.50">C+</option>
                          <option value="2.25">C</option>
                          <option value="2.00">C-</option>
                          <option value="1.75">D+</option>
                          <option value="1.50">D</option>
                          <option value="0.00">F</option>
                        </select>
                      </div><!-- col -->
                      <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                        <select class="cselect material_repeat" data-num="1" name="C4Repeat" id="C4Repeat">
                          <option value="0" selected>هل المادة معادة ؟</option>
                          <option value="0">لا</option>
                          <option value="1">نعم</option>
                        </select>
                      </div><!-- col -->
                      <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                        <select class="cselect material_pmark" data-num="1" disabled name="C4PreviousGrade" id="C4PreviousGrade">
                          <option value="-1" selected>العلامة السابقة</option>
                          <option value="4.00">A+</option>
                          <option value="3.75">A</option>
                          <option value="3.50">A-</option>
                          <option value="3.25">B+</option>
                          <option value="3.00">B</option>
                          <option value="2.75">B-</option>
                          <option value="2.50">C+</option>
                          <option value="2.25">C</option>
                          <option value="2.00">C-</option>
                          <option value="1.75">D+</option>
                          <option value="1.50">D</option>
                          <option value="0.00">F</option>
                        </select>
                      </div><!-- col -->
                  </div><!-- gbaitem -->

                  <div class="gbaitem">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                          <input type="text" class="material_name1" data-num="1" placeholder="اسم المادة">
                        </div><!-- col -->
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                          <select class="cselect material_hours1" name="C5Credits" id="C5Credits" data-num="1">
                            <option value="0" selected>عدد الساعات</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>
                        </div><!-- col -->
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                          <select class="cselect material_marks1" data-num="1" name="C5AnticipatedGrade" id="C5AnticipatedGrade">
                            <option value="-1" selected>العلامة المتوقعة</option>
                            <option value="4.00">A+</option>
                            <option value="3.75">A</option>
                            <option value="3.50">A-</option>
                            <option value="3.25">B+</option>
                            <option value="3.00">B</option>
                            <option value="2.75">B-</option>
                            <option value="2.50">C+</option>
                            <option value="2.25">C</option>
                            <option value="2.00">C-</option>
                            <option value="1.75">D+</option>
                            <option value="1.50">D</option>
                            <option value="0.00">F</option>
                          </select>
                        </div><!-- col -->
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                          <select class="cselect material_repeat" data-num="1" name="C5Repeat" id="C5Repeat">
                            <option value="0" selected>هل المادة معادة ؟</option>
                            <option value="0">لا</option>
                            <option value="1">نعم</option>
                          </select>
                        </div><!-- col -->
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                          <select class="cselect material_pmark" data-num="1" disabled name="C5PreviousGrade" id="C5PreviousGrade">
                            <option value="-1" selected>العلامة السابقة</option>
                            <option value="4.00">A+</option>
                            <option value="3.75">A</option>
                            <option value="3.50">A-</option>
                            <option value="3.25">B+</option>
                            <option value="3.00">B</option>
                            <option value="2.75">B-</option>
                            <option value="2.50">C+</option>
                            <option value="2.25">C</option>
                            <option value="2.00">C-</option>
                            <option value="1.75">D+</option>
                            <option value="1.50">D</option>
                            <option value="0.00">F</option>
                          </select>
                        </div><!-- col -->
                    </div><!-- gbaitem -->

                    <div class="gbaitem">
                          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <input type="text" class="material_name1" data-num="1" placeholder="اسم المادة">
                          </div><!-- col -->
                          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                            <select class="cselect material_hours1" name="C6Credits" id="C6Credits" data-num="1">
                              <option value="0" selected>عدد الساعات</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                            </select>
                          </div><!-- col -->
                          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                            <select class="cselect material_marks1" data-num="1" name="C6AnticipatedGrade" id="C6AnticipatedGrade">
                              <option value="-1" selected>العلامة المتوقعة</option>
                              <option value="4.00">A+</option>
                              <option value="3.75">A</option>
                              <option value="3.50">A-</option>
                              <option value="3.25">B+</option>
                              <option value="3.00">B</option>
                              <option value="2.75">B-</option>
                              <option value="2.50">C+</option>
                              <option value="2.25">C</option>
                              <option value="2.00">C-</option>
                              <option value="1.75">D+</option>
                              <option value="1.50">D</option>
                              <option value="0.00">F</option>
                            </select>
                          </div><!-- col -->
                          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                            <select class="cselect material_repeat" data-num="1" name="C6Repeat" id="C6Repeat">
                              <option value="0" selected>هل المادة معادة ؟</option>
                              <option value="0">لا</option>
                              <option value="1">نعم</option>
                            </select>
                          </div><!-- col -->
                          <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                            <select class="cselect material_pmark" data-num="1" disabled name="C6PreviousGrade" id="C6PreviousGrade">
                              <option value="-1" selected>العلامة السابقة</option>
                              <option value="4.00">A+</option>
                              <option value="3.75">A</option>
                              <option value="3.50">A-</option>
                              <option value="3.25">B+</option>
                              <option value="3.00">B</option>
                              <option value="2.75">B-</option>
                              <option value="2.50">C+</option>
                              <option value="2.25">C</option>
                              <option value="2.00">C-</option>
                              <option value="1.75">D+</option>
                              <option value="1.50">D</option>
                              <option value="0.00">F</option>
                            </select>
                          </div><!-- col -->
                      </div><!-- gbaitem -->

                      <div class="gbaitem">
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                              <input type="text" class="material_name1" data-num="1" placeholder="اسم المادة">
                            </div><!-- col -->
                            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                              <select class="cselect material_hours1" name="C7Credits" id="C7Credits" data-num="1">
                                <option value="0" selected>عدد الساعات</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                              </select>
                            </div><!-- col -->
                            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                              <select class="cselect material_marks1" data-num="1" name="C7AnticipatedGrade" id="C7AnticipatedGrade">
                                <option value="-1" selected>العلامة المتوقعة</option>
                                <option value="4.00">A+</option>
                                <option value="3.75">A</option>
                                <option value="3.50">A-</option>
                                <option value="3.25">B+</option>
                                <option value="3.00">B</option>
                                <option value="2.75">B-</option>
                                <option value="2.50">C+</option>
                                <option value="2.25">C</option>
                                <option value="2.00">C-</option>
                                <option value="1.75">D+</option>
                                <option value="1.50">D</option>
                                <option value="0.00">F</option>
                              </select>
                            </div><!-- col -->
                            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                              <select class="cselect material_repeat" data-num="1" name="C7Repeat" id="C7Repeat">
                                <option value="0" selected>هل المادة معادة ؟</option>
                                <option value="0">لا</option>
                                <option value="1">نعم</option>
                              </select>
                            </div><!-- col -->
                            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                              <select class="cselect material_pmark" data-num="1" disabled name="C7PreviousGrade" id="C7PreviousGrade">
                                <option value="-1" selected>العلامة السابقة</option>
                                <option value="4.00">A+</option>
                                <option value="3.75">A</option>
                                <option value="3.50">A-</option>
                                <option value="3.25">B+</option>
                                <option value="3.00">B</option>
                                <option value="2.75">B-</option>
                                <option value="2.50">C+</option>
                                <option value="2.25">C</option>
                                <option value="2.00">C-</option>
                                <option value="1.75">D+</option>
                                <option value="1.50">D</option>
                                <option value="0.00">F</option>
                              </select>
                            </div><!-- col -->
                        </div><!-- gbaitem -->

                        <div class="gbaitem">
                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <input type="text" class="material_name1" data-num="1" placeholder="اسم المادة">
                              </div><!-- col -->
                              <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                <select class="cselect material_hours1" name="C8Credits" id="C8Credits" data-num="1">
                                  <option value="0" selected>عدد الساعات</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                </select>
                              </div><!-- col -->
                              <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                <select class="cselect material_marks1" data-num="1" name="C8AnticipatedGrade" id="C8AnticipatedGrade">
                                  <option value="-1" selected>العلامة المتوقعة</option>
                                  <option value="4.00">A+</option>
                                  <option value="3.75">A</option>
                                  <option value="3.50">A-</option>
                                  <option value="3.25">B+</option>
                                  <option value="3.00">B</option>
                                  <option value="2.75">B-</option>
                                  <option value="2.50">C+</option>
                                  <option value="2.25">C</option>
                                  <option value="2.00">C-</option>
                                  <option value="1.75">D+</option>
                                  <option value="1.50">D</option>
                                  <option value="0.00">F</option>
                                </select>
                              </div><!-- col -->
                              <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                <select class="cselect material_repeat" data-num="1" name="C8Repeat" id="C8Repeat">
                                  <option value="0" selected>هل المادة معادة ؟</option>
                                  <option value="0">لا</option>
                                  <option value="1">نعم</option>
                                </select>
                              </div><!-- col -->
                              <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                <select class="cselect material_pmark" data-num="1" disabled name="C8PreviousGrade" id="C8PreviousGrade">
                                  <option value="-1" selected>العلامة السابقة</option>
                                  <option value="4.00">A+</option>
                                  <option value="3.75">A</option>
                                  <option value="3.50">A-</option>
                                  <option value="3.25">B+</option>
                                  <option value="3.00">B</option>
                                  <option value="2.75">B-</option>
                                  <option value="2.50">C+</option>
                                  <option value="2.25">C</option>
                                  <option value="2.00">C-</option>
                                  <option value="1.75">D+</option>
                                  <option value="1.50">D</option>
                                  <option value="0.00">F</option>
                                </select>
                              </div><!-- col -->
                          </div><!-- gbaitem -->




            <div class="gbaitems">

            </div><!-- gbaitems -->



        </div><!-- col -->

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="gbaoptions">
            <div class="gbacalc">
              <span>
                <label for="">المعدل الحالي : </label>
                <input type="text" name="ExpectedTermGPA" id="ExpectedTermGPA" class="currentgpa" readonly>
                <button class="currentgpa_btn" name="Calculate" id="Calculate" onclick="return CalcExpectedTermGPA('ExpectedTermGPA')" type="button">احسب</button>
              </span>
              <span>
                <label for=""> المعدل التراكمي : </label>
                <input type="text" name="ExpectedCumuGPA" id="ExpectedCumuGPA" class="totalgpa" readonly>
                <button class="totalgpa_btn" name="Calculate" id="Calculate" onclick="return CalcExpectedCumuGPA('ExpectedCumuGPA')" type="button">احسب</button>
              </span>
            </div><!-- gbacalc -->
          </div><!-- gbaoptions -->
        </div><!-- col -->
</form>


<form name="CalculationForm2" class="mform2" method="post" action="http://elechu.com/grade">
  <h3 class="mtitle">  احسب المعدل الذي تهدف إليه </h3>
  <div class="gbaoptions gbaoptions2">
    <div class="gbacalc">
      <span>
        <label for=""> عدد ساعاتي لهذا الفصل :  </label>
        <input  name="CurrentCreditHours" id="CurrentCreditHours" maxlength="2" value="00" onclick="this.value = '';" onkeyup="return validate_CurrentCredHrComp()" type="Text">
         <label for="">ساعة</label>
      </span>
      <span>
        <label for="">وأريد ان ارفع معدلي التراكمي إلى : </label>
        <input name="WantedCumulGPA" id="WantedCumulGPA" value="0.000" maxlength="5" onclick="this.value = '';" onkeyup="return validate_WantedGPA(this.value)" type="Text">
      </span>
      <h2>كم المعدل الفصلي الذي احتاجه لكي أصل إلى المعدل التراكمي المطلوب - اضغط على احسب</h2>
      <span>
        <input type="text" name="NeededGPA" id="NeededGPA" class="totalgpa" readonly>
        <button class="totalgpa_btn" name="CalculateNeededGPA" id="CalculateNeededGPA" onclick="return CalcNeededGPA('NeededGPA')" type="button">احسب</button>
      </span>
    </div><!-- gbacalc -->
  </div><!-- gbaoptions -->



</form>


      </div><!-- gbapage -->
    </div><!-- continer -->
</section>

@endsection

@section('footer')

    <!---<div class="hidden gbastore">
      <div class="gbaitem">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <a href="#" class="close_gbaitem"><i class="fa fa-times"></i></a>
                  <input type="text" class="material_name1" data-num="1" placeholder="اسم المادة">
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                  <select class="cselect material_hours1" data-num="1">
                    <option value="0" selected>عدد الساعات</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                  <select class="cselect material_marks1" data-num="1">
                    <option value="-1" selected>العلامة المتوقعة</option>
                    <option value="4.00">A+</option>
                    <option value="3.75">A</option>
                    <option value="3.50">A-</option>
                    <option value="3.25">B+</option>
                    <option value="3.00">B</option>
                    <option value="2.75">B-</option>
                    <option value="2.50">C+</option>
                    <option value="2.25">C</option>
                    <option value="2.00">C-</option>
                    <option value="1.75">D+</option>
                    <option value="1.50">D</option>
                    <option value="0.00">F</option>
                  </select>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                  <select class="cselect material_repeat" data-num="1">
                    <option value="0" selected>هل المادة معادة ؟</option>
                    <option value="0">لا</option>
                    <option value="1">نعم</option>
                  </select>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                  <select class="cselect material_pmark" data-num="1" disabled>
                    <option value="-1" selected>العلامة السابقة</option>
                    <option value="4.00">A+</option>
                    <option value="3.75">A</option>
                    <option value="3.50">A-</option>
                    <option value="3.25">B+</option>
                    <option value="3.00">B</option>
                    <option value="2.75">B-</option>
                    <option value="2.50">C+</option>
                    <option value="2.25">C</option>
                    <option value="2.00">C-</option>
                    <option value="1.75">D+</option>
                    <option value="1.50">D</option>
                    <option value="0.00">F</option>
                  </select>
                </div>
            </div>
    </div>-->


    <script>
      $(document).ready(function(){
        /*$('.addmateria').on('click', function(){
          var real_length = $('.gbaitems .gbaitem').length + 1;
          var new_material = $('.gbastore').html();
          $('.gbaitems').append(new_material);
        });//on
        $(document).on('click','.close_gbaitem', function(){
            $(this).closest('.gbaitem').remove();
        });*/
        $(document).on('change','.material_repeat', function(){
          var rval = $(this).val();
          
          if(rval == 1){
            $(this).closest('.gbaitem').find('.material_pmark').prop("disabled", false);
          }else{
            $(this).closest('.gbaitem').find('.material_pmark').val('-1').prop("disabled", true);
          }
        });//on
      });
    </script>
@endsection
