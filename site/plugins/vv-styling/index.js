// eslint-disable-next-line no-undef
panel.plugin('shallowred/kirby-spacings', {
  blocks: {
    spacing: `
      <div class="spacing-block" @dblclick="open">
        <div class="wrapper">
          <div
            v-if="content.size !== 'none'"
            class="line"
            :class="['size--' + content.size]"
          >
            <span class="arrow up"></span>
            <span class="line__inner"></span>
            <span class="arrow down"></span>
            <span class="size-label">{{ content.size }}</span>
          </div>
          <div v-else>
            <k-icon type="hidden">
          </div>
          <div class="text">
            Espacement par défaut
          </div>
        </div>
        <div class="wrapper" v-if="content.mobile_size">
          <div
            v-if="content.mobile_size !== 'none'"
            class="line line--mobile"
            :class="['size--' + content.mobile_size]"
          >
            <span class="arrow up"></span>
            <span class="line__inner"></span>
            <span class="arrow down"></span>
            <span class="size-label">{{ content.mobile_size }}</span>
          </div>
          <div v-else>
            <k-icon type="hidden">
          </div>          
          <div class="text">
            Espacement mobile
          </div>
        </div>
      </div>
    `,
  },
})
