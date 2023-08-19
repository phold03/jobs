<template>
  <div class="layout-search">
    <section class="overlape">
      <div class="block no-padding">
        <div class="container fluid">
                <h3>
                  Tìm thấy 0 công việc phù hợp với bạn
                </h3>
        </div>
      </div>
    </section>

    <section>
      <div class="block remove-bottom">
        <div class="container">
          <div class="row no-gape">
            <aside class="col-lg-3 column mb-5">
                <div class="widget">
                  <div class="search_widget_job">
                    <div class="field_w_search">
                      <input
                        type="text"
                        name="key"
                        v-model="data.request.key"
                        placeholder="Search Keywords"
                      />
                      <i class="la la-search"></i>
                    </div>
                    <!-- Search Widget -->
                  </div>
                </div>
                <div class="widget">
                  <h3 class="sb-title open">Mức lương</h3>
                  <div class="specialism_widget">
                    <div class="simple-checkbox">
                      <p v-for="item in data.wage" :key="item.id">
                        <input
                          type="radio"
                          :checked="item.id == data.request.wage"
                          v-model="item.id"
                          name="wage"
                        />
                        <label :for="'luong' + item.id">{{ item.label }}</label>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="widget">
                  <h3 class="sb-title open">Kỹ năng</h3>
                  <div class="specialism_widget" style="overflow: auto">
                    <div
                      class="simple-checkbox scrollbar ss-container"
                      style="height: 366px"
                    >
                      <p v-for="item in data.skill" :key="item.id">
                        <input
                          type="checkbox"
                          :checked="valueChecked.includes(item.id)"
                          name="skill[]"
                        />
                        <label :for="'skill' + item.id">{{ item.label }}</label>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="widget">
                  <h3 class="sb-title open">Kinh nghiệm</h3>
                  <div class="specialism_widget">
                    <div class="simple-checkbox scrollbar">
                      <p v-for="item in data.experience" :key="item.id">
                        <input
                          type="radio"
                          :id="'experience' + item.id"
                          :checked="item.id == data.request.experience"
                          name="experience"
                        /><label :for="'experience' + item.id">{{
                          item.label
                        }}</label>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="widget">
                  <h3 class="sb-title open">Lĩnh vực</h3>
                  <div class="specialism_widget">
                    <!-- <div class="simple-checkbox scrollbar">
                      <p v-for="item in data.majors" :key="item.id">
                        <input
                          type="radio"
                          :value="item.id"
                          name="majors"
                          :id="'majors' + item.id"
                          :checked="item.id == data.request.majors"
                        /><label :for="'majors' + item.id">{{
                          item.label
                        }}</label>
                      </p>
                    </div> -->
                  </div>
                </div>
                <div class="widget">
                  <h3 class="sb-title open">Chuyên ngành</h3>
                  <div class="specialism_widget">
                    <div class="simple-checkbox scrollbar">
                      <p v-for="item in data.profession" :key="item.id">
                        <input
                          type="radio"
                          :checked="item.id == data.request.profession"
                          v-model="item.id"
                          :value="item.id"
                        /><label :for="'profession' + item.id">{{
                          item.label
                        }}</label>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="widget">
                  <h3 class="sb-title open">Hình thức làm việc</h3>
                  <div class="specialism_widget">
                    <div class="simple-checkbox scrollbar">
                      <p v-for="item in data.workingform" :key="item.id">
                        <input
                          type="radio"
                          :checked="item.id == data.request.workingform"
                          v-model="item.id"
                          name="workingform"
                        /><label :for="'workingform' + item.id">{{
                          item.label
                        }}</label>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="widget">
                  <h3 class="sb-title open">Thời gian làm việc</h3>
                  <div class="specialism_widget">
                    <div class="simple-checkbox scrollbar">
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Lọc</button>
            </aside>
            <div class="col-lg-9 column">
              <div class="emply-resume-sec" id="paginated-list">
                <div
                  class="emply-resume-list square"
                >
                  <div class="shortlists">
                    <a href="#" title="">{{ item.get_wage.name }}</a>
                  </div>
                </div>
                <div class="row">
                  <div
                    class="col-lg-12 col-md-12 col-sm-12 job-list browse-all-cat"
                  >
                    <span class="text-center p-3">
                      <div
                        id="pagination-numbers"
                        style="margin-bottom: 20px"
                      ></div>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  props: ["data"],
  data() {
    return {
      valueChecked: [],
    };
  },
  created() {
    if (this.data.request.skill) {
      this.data.request.skill.map((x) => {
        this.valueChecked.push(Number(x));
      });
    }
  },
};
</script>

<style scoped>
.custom-link {
  font-size: 13px;
  cursor: pointer;
 text-align: center;
}

.cus {
  cursor: pointer;
  justify-content: center;
}

.logo-company {
  width: 100px;
}

.title-job-mobile {
  width: 360px;
}
</style>